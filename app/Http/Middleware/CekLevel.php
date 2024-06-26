<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $level
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
    {
        if (!Auth::check() || Auth::user()->level !== $level) {
            return redirect('/login')->with('error', 'You do not have access to this page.');
        }
        
        return $next($request);
    }
}
