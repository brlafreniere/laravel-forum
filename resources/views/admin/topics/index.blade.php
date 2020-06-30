@extends("layouts.topics_admin")

@section("topics_content")
    <ul class="list-group list-group-flush">
        @foreach ($topics as $topic)
            <li class="list-group-item">
                <div>{{ $topic->title }}</div>
                <div>{{ $topic->description }}</div>
            </li>
        @endforeach
    </ul>
@endsection