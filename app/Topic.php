<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Topic extends Model {
    protected static function booted() {
        static::saving(function ($topic) {
            $topic->slug = Str::kebab($topic->title);
        });
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }
}
