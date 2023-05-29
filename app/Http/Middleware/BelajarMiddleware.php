<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BelajarMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): mixed
    {
        // if (view()->exists('about')) {
        //     // return view('about'); error cookie
        //     return response()->view('about');
        // }
        // karena sudah berjalan baik masuk cara 2 (pakai controller Belajar Controller yang nangani buka view.)


        return $next($request);
    }
}
