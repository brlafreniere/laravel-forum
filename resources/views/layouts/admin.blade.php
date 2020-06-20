@extends("layouts.main")

@section("content")
    <div class="d-flex">
        @include("admin.nav")
        <div class="pl-5 w-100">
            @yield("admin_content")
        </div>
    </div>
@endsection