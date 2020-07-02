@extends("layouts.forum")

@section("forum_content")
    <div class="bg-white p-5">
        <h1 class="pb-3 mb-5 border-bottom">Log In</h1>
        <form action="{{ route("user-sessions.store") }}" method="POST">
            <div class="form-group">
                <label for="e-mail">E-mail Address</label>
                <input name="email_address" class="form-control" type="email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" class="form-control" type="password" />
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" />
            </div>
        </form>
    </div>
@endsection