<?php

namespace App\Models;

use Carbon\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() {

        return $this->belongsTo(User::class);
    }
    public function topic() {

        return $this->belongsTo(Topic::class);
    }
    public function createdDate() {

        Date::setLocale('ru');
        return Date::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d M, Y  H:i');
    }

}
