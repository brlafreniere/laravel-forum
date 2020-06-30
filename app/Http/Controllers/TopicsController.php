<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Topic;

class TopicsController extends Controller {
    public function index() {
        $topics = Topic::all();
        return view('topics/index')->with('topics', $topics);
    }
}
