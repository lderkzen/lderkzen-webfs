<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class IsAuthorized
{
    public function handle(Request $request, Closure $next, $authLevel)
    {
        if (Auth::user()->role_id < intval($authLevel))
            return Redirect::back()->withErrors('U heeft geen toestemming om deze pagina te bekijken.');

        return $next($request);
    }
}
