@extends("layouts.main")

@section("content")
    <div>
        @yield("forum_header")
    </div>
    <div class="forum-body">
        @yield("forum_content")
    </div>
@endsection