<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {
    public function index() {
        return view('post/index', ['posts' => \App\Post::all()]);
    }

    public function new() {
        return view('post/new');
    }
}
