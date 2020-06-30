<ul class="list-group list-group-flush w-100">
    @foreach($topics as $topic)
        <a href="{{ route('topic-posts', ['topic_title' => Str::kebab($topic->title)]) }}" class="flush-item-link">
            <li class="list-group-item topic-hover">
                <div><h3>{{ $topic->title }}</h3></div>
                <div>{{ $topic->description }}</div>
            </li>
        </a>
    @endforeach
</ul>