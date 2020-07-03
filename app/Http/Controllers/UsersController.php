<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class UsersController extends Controller {
    public function create() {
        return view("user/create");
    }

    public function store(Request $request) {
        $email_address = $request->input('email_address');
        $password = $request->input('password');

        $user = new User;
        $user->email = $email_address;
        $user->password = Hash::make($password);
        $user->save();
        return redirect()->action('TopicsController@index');
    }
}