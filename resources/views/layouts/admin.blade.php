@extends("layouts.main")

@section("content")
    <div class="d-flex w-100">
        @include("admin.nav")
        <div class="pl-5 w-100 h-100 d-flex flex-column">
            <div class="pl-3 pt-3 mt-3 rounded w-100 flex-grow-1">
                @yield("admin_content")
            </div>
        </div>
    </div>
@endsection