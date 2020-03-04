<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckAdminOrUser
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user()->type;
        if ($user !== 'admin') {
            return abort(403);
        }
        return $next($request);
    }
}
