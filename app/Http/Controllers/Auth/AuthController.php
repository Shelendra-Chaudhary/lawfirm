<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * login
     *
     * @param  mixed $request
     * @return void
     */
    public function login(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('auth.login');
        } elseif ($request->method() == 'POST') {
            return "post login";
        }
    }
}
