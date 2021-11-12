<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Index() {
        return view('auth.login');
    }

    public function Login(Request $request) {
        return view('create.dashboard');
    }
}
