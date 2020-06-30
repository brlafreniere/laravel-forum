<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Topic;

class TopicsController extends Controller {
    public function index() {
        $topics = Topic::all();
        return view("admin/topics/index")->with('topics', $topics);
    }

    public function create() {
        return view("admin/topics/create");
    }
}
