@extends("layouts.main")

@section("content")
    <form method="POST" action="/post">
        @csrf
        <div class="form-group">
            <input name="title" type="text" class="form-control" />
        </div>
    </form>
@endsection