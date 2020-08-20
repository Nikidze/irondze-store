<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session('isAdmin') && $_SERVER['REQUEST_URI'] != '/admin/login'){
            return redirect()->route('admin.login.form');
        }
        return $next($request);
    }
}
