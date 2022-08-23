<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function show()
    {
        if (Auth::check())
            return Redirect::to('/kassa');

        return Inertia::render('Login');
    }

    public function login(LoginRequest $request)
    {
        Auth::login($request->employee);

        return Redirect::intended('/kassa');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect::to('/kassa/login');
    }
}
