<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Authenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check())
            return Redirect::to('/kassa/login')->withErrors('U moet ingelogd zijn om toegang te krijgen tot deze pagina.');

        return $next($request);
    }
}
