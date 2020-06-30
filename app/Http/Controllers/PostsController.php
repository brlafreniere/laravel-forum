<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Topic;

class PostsController extends Controller {
    public function index($topic_title) {
        $topic = Topic::where('title', $topic_title)->first();
        return view('post/index', ['posts' => Post::all()]);
    }

    public function create() {
        $topics = Topic::all();
        return view('post/create', ['topics' => $topics]);
    }
    
    public function store(Request $request) {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->topic_id = $request->topic_id;

        $post->user_id = 1;
        $post->save();

        $topic = Topic::find($request->topic_id);
        return redirect()->route('topic-posts', ['topic_title' => $topic->kebab_title()]);
    }
}
