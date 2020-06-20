@extends("layouts.admin")

@section("admin_content")
    @include("admin.topics.nav")
    <div class="pl-3 pt-3 bg-light w-100">
        @yield("topics_content")
    </div>
@endsection