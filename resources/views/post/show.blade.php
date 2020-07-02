@extends("layouts.forum")

@section("forum_content")
    <div class="bg-white p-5">
        <div><h1>{{ $post->title }}</h1></div>
        <div>{{ $post->body }}</div>
    </div>
@endsection