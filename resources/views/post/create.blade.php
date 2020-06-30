@extends("layouts.main")

@section("content")
    <form method="POST" action="/posts">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" class="form-control" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="topic_id">Topic</label>
            <select name="topic_id" class="form-control">
                @foreach ($topics as $topic)
                    <option value="{{ $topic->id }}">{{ $topic->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" />
        </div>
    </form>
@endsection