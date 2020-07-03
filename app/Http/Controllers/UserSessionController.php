<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSessionController extends Controller {
    function create() {
        return view("user-sessions/create");
    }

    function store(Request $request) {
        $credentials = [
            'email' => $request->input('email_address'),
            'password' => $request->input('password') ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended();
        }
    }

    function logout() {
        return redirect()->action('UserSessionController@destroy');
    }

    function destroy() {
        Auth::logout();
        return redirect()->action('TopicsController@index');
    }
}
