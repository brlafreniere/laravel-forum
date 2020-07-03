@extends("layouts.forum")

@section("forum_content")
    <div class="p-5 bg-white">
        <h1 class="border-bottom pb-3 mb-5">User Registration</h1>
        <form action="{{ route("users.store") }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email_address">E-mail Address</label>
                <input name="email_address" type="email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
@endsection