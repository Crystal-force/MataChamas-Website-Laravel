<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Rules\MatchOldPassword;

class RegisterController extends Controller
{
    public function Index(Request $request) {
                
        return view('auth.register');
    }

    public function Register(Request $request) {
        $registered = User::where('email', $request['email'])->first();
        
        if($registered != null) {
            return response()->json(['data'=>'0']);
        }
        
        $new_user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => '2'
        ]);

        auth()->login($new_user);
        
        return response()->json(['data' => '1']);
    }
}
