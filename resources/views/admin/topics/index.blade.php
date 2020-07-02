@extends("layouts.admin")

@section("admin_content")
    @include("admin.topics.nav")
    <ul class="list-group list-group-flush">
        @foreach ($topics as $topic)
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    <div>{{ $topic->title }}</div>
                    <div>{{ $topic->description }}</div>
                </div>
                <div><a href="/admin/topics/{{ $topic->id }}/confirm-delete" class="btn btn-danger">X</a></div>
            </li>
        @endforeach
    </ul>
@endsection