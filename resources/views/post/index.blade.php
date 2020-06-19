@extends("layouts.main")

@foreach ($posts as $post)
    <div>
        <div>{{ $post->title }}</div>
        <div>{{ $post->body }}</div>
    </div>
@endforeach