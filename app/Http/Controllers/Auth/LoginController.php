<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginForm()
    {
       
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        // return view('pages.auth.login');
    }
}
