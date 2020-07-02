@extends("layouts.admin")

@section("admin_content")
    <h2>Are you sure?</h2>
    <p>You are about to delete the topic: <strong>{{ $topic->title }}</strong></p>
    <p>This will delete all of its corresponding posts.</p>
    <form action="/admin/topics/{{ $topic->id }}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" class="btn btn-danger" value="Confirm Delete" />
    </form>
@endsection