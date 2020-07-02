<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSessionController extends Controller {
    function create() {
        return view("user-sessions/create");
    }

    function store() {
        $credentials = $request->only('email_address', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended();
        }
    }
}
