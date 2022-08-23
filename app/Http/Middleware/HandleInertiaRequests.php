<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'cash_register/app';

    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'auth' => Auth::user() ? [
                'user' => [
                    'employee_nr' => Auth::user()->employee_nr,
                    'can' => [
                        'accessOrder' => Auth::user()->role_id >= 3,
                        'accessMenu' => true,
                        'accessSales' => Auth::user()->role_id >= 3,
                        'accessAdmin' => Auth::user()->role_id >= 4
                    ]
                ]
            ] : [
                'user' => null
            ]
        ]);
    }
}
