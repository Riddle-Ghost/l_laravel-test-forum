<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Topic extends Model
{
    use Sluggable;
    protected $postLast;
    protected $postLastNotEmpty;

    public function user() {

        return $this->belongsTo(User::class);
    }
    public function category() {

        return $this->belongsTo(Category::class);
    }
    public function posts() {

        return $this->hasMany(Post::class);
    }
    public function tags() {
        // Принадлежит многим (модель/таблица/ключ/ключ2)
        return $this->belongsToMany(

            Tag::class,
            'topics_tags',
            'topic_id',
            'tag_id'
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
