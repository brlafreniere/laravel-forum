@extends("layouts.admin")

@section("admin_content")
    @include("admin.topics.nav")
    <div class="pl-3 pt-3 mt-3 rounded w-100 flex-grow-1">
        @yield("topics_content")
    </div>
@endsection