<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use \App\Topic;

use Illuminate\Http\Request;

class TopicsController extends Controller {
    public function index() {
        $topics = Topic::all();
        return view("admin/topics/index")->with('topics', $topics);
    }

    public function create() {
        return view("admin/topics/create");
    }

    public function store(Request $request) {
        $topic = new Topic();
        $topic->title = $request->input('title');
        $topic->description = $request->input('description');
        $topic->save();
        return redirect()->route('topics.index');
    }

    public function confirm_delete($id) {
        $topic = Topic::find($id);
        return view("admin/topics/confirm-delete", ['topic' => $topic]);
    }

    public function destroy($id) {
        $topic = Topic::find($id);
        $topic->posts->each(function ($post) {
            $post->delete();
        });
        $topic->delete();
        return redirect()->route('topics.index');
    }
}
