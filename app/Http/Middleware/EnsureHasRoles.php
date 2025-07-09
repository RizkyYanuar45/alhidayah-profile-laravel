<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth Facade
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  string $role
     * @param  string|null $guard
     */
    public function handle(Request $request, Closure $next, string $role, $guard = null): Response
    {
        // Gunakan Auth facade untuk memeriksa pengguna dari guard yang spesifik
        $user = Auth::guard($guard)->user();

        if (!$user || !method_exists($user, 'hasRole') || !$user->hasRole($role)) {
            abort(403, 'ANDA TIDAK MEMILIKI AKSES.');
        }

        return $next($request);
    }
}