<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
    use Sluggable;

    public function topics() {
        // Принадлежит многим (модель/таблица/ключ/ключ2)
        return $this->belongsToMany(

            Topic::class,
            'topics_tags',
            'tag_id',
            'topic_id'
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
}
