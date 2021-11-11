<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectUserController extends Controller
{
    public function Index() {
        return view('select-user');
    }
}
