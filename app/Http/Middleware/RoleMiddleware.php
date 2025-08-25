<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = Auth::user(); // Alternative we also use to $request->user() both are same 

        if (!$user || !in_array($user->role_id, $roles)) {
            abort(403, 'Unauthorized.');
        }

        return $next($request);
    }
}

