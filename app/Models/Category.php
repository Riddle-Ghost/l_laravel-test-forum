<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;
    //Последний пост для категории
    protected $postLast;
    protected $postLastNotEmpty;

    public function topics() {

        return $this->hasMany(Topic::class);
    }
    public function posts() {

        return $this->hasManyThrough(
            'App\Models\Post',
            'App\Models\Topic',
            'category_id', // Foreign key on users table...
            'topic_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function getPostLastDate() {

        $post = $this->getPostLast();
        if($post) {
            $date = $post->created_at;
            $date = \Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s', $date)->format('d F Y  H:i');
        }

        return $post ? 'Last message ' . $date : 'Еще нет постов';

    }
    public function getPostLastUserName() {

        $post = $this->getPostLast();
        return $post ? $post->user->name : 'Нет юзера';
    }
    public function getPostLast() {
        if(!$this->postLastNotEmpty) {

            $this->postLast = $this->posts()->orderBy('created_at', 'desc')->first();
            $this->postLastNotEmpty = true;
        }
        return $this->postLast;
    }
}
