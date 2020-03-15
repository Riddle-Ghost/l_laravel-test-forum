<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Topic;

class HomeController extends Controller
{

    public function index() {

        $categories = Category::withCount('topics')->withCount('posts')->get();

        return view('pages.index2', compact('categories'));
    }
    public function category($slug) {

        $category = Category::where('slug', $slug)->firstOrFail();
        $topics = $category->topics()->withCount('posts')->paginate(10);
        return view('pages.category2', compact('category', 'topics'));
    }
    public function topic($slug, $topic_slug) {

        $category = Category::where('slug', $slug)->firstOrFail();
        $topic = Topic::where('slug', $topic_slug)->firstOrFail();
        $posts = $topic->posts()->with('user')->paginate(10);

        return view('pages.topic2', compact('topic', 'posts', 'category'));
    }
}
//попробовать иссет для постласт

