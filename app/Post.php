<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model {
    public function topic() {
        return $this->belongsTo('App\Topic');
    }

    public function createdAtFormatted() {
        $dt = new Carbon($this->created_at);
        $formatted = $dt->format('g:i a \o\n F jS, Y');
        return $formatted;
    }
}
