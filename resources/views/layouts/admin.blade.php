@extends("layouts.main")

@section("content")
    <div class="d-flex w-100">
        @include("admin.nav")
        <div class="pl-5 w-100 h-100 d-flex flex-column">
            @yield("admin_content")
        </div>
    </div>
@endsection