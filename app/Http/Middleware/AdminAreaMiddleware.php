<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAreaMiddleware
{
    /**
     * Handle an incoming request.
     * Ensures user is authenticated before accessing admin routes.
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }

        // Redirect unauthenticated users to the admin login page.
        return redirect()->guest(route('admin.login'));
    }
}
