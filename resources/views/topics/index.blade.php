@extends("layouts.forum")

@section("forum_header")
    <h1 class="text-center">Topics</h1>
    @include("post.menu")
@endsection

@section("forum_content")
    @include('topics.list')
@endsection