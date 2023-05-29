<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class BelajarPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {


    //     return $next($request);
    // }
    // public function handle(Request $request, Closure $next, ...$permissions)
    // {
    //     foreach ($permissions as $permission) {
    //         if (!Auth::user()->can($permission)) {
    //             abort(403);
    //         }
    //     }

    //     return $next($request);
    // }
    //versi spatie :
    public function handle(Request $request, Closure $next, ...$permissions)
    {
        if (!Auth::user()) {
            abort(403);
        }

        foreach ($permissions as $permission) {
            if (!Auth::user()->hasPermissionTo($permission)) {
                abort(403);
            }
        }

        return $next($request);
    }
}
