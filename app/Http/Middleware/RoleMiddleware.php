<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) // I'm allowing this middleware to be used at routes that doesn't require authentication
            return redirect('login');

        /** @var User */
        $user = Auth::user();

        // Tolong modifikasi bagian ini agar membuka views/admin/manage-users.blade.php tanpa parameter apa2
        // return view('admin.manage-users');
    }
}


        // $user = Auth::guard('web')->user();

        // if ($user->hasAnyRole($roles)) {
        //     return $next($request);
        // }
            
        // return response()->view('errors.my403', [], 403);

        // return redirect('my404');
