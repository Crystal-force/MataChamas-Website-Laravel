<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Index(Request $request) {
        $role = $request->id;
        
        return view('auth.register')->with([
            'role' => $role,
        ]);
    }
}
