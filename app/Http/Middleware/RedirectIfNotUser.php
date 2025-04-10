<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotUser
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is not authenticated with the 'clients' guard
        if (!Auth::guard('clients')->check()) {
            return redirect()->route('clients.signin');
        }

        return $next($request);
    }
}
