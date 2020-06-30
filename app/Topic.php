<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Topic extends Model {
    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function kebab_title() {
        return Str::kebab($this->title);
    }
}
