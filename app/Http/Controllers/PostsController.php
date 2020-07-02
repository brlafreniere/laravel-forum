<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Topic;

class PostsController extends Controller {
    public function index($topic_slug) {
        $topic = Topic::where('slug', $topic_slug)->first();
        return view('post/index', ['posts' => $topic->posts]);
    }

    public function create() {
        $topics = Topic::all();
        return view('post/create', ['topics' => $topics]);
    }

    public function show($id) {
        $post = Post::find($id);
        return view('post/show', ['post' => $post]);
    }
    
    public function store(Request $request) {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->topic_id = $request->topic_id;

        $post->user_id = 1;
        $post->save();

        $topic = Topic::find($request->topic_id);
        return redirect()->route('topic-posts', ['topic_slug' => $topic->slug]);
    }
}
