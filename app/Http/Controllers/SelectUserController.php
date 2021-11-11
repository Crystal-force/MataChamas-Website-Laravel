<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;

class SelectUserController extends Controller
{
    public function Index() {
        $role = Roles::get();
        
        return view('select-user')->with([
            'role' => $role
        ]);
    }
}
