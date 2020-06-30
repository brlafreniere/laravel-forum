<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSessionController extends Controller {
    function create() {
        return view("user-sessions/create");
    }
}
