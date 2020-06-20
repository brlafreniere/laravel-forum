<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller {
    public function index() {
        return view('post/index', ['posts' => \App\Post::all()]);
    }

    public function create() {
        return view('post/create');
    }
}
