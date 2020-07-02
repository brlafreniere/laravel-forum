@extends("layouts.forum")

@section("forum_header")
    @include("post.menu")
@endsection

@section("forum_content")
        <ul class="list-group list-group-flush w-100">
            @foreach ($posts as $post)
                <a href="{{ route('posts.show', $post->id) }}" class="flush-item-link">
                    <li class="list-group-item">
                        <div><h2>{{ $post->title }}</h2></div>
                        <div>{{ $post->createdAtFormatted() }}</div>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection