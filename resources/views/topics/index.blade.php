@extends("layouts.main")

@section("content")
    <h1 class="text-center">Topics</h1>
    <div class="forum-body">
        @include('topics.list')
    </div>
@endsection