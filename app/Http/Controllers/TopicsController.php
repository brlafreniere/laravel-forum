<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicsController extends Controller {
    public function index() {
        $topics = \App\Topic::all();
        return view('topics/index', ['topics' => \App\Topic::all()]);
    }
}
