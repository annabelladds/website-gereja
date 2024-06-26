<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class VerifyCsrfToken
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
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if (in_array($request->login()->level, $levels)) {
            return $next($request);
        }
        if (Auth::user()->level == 'Annabella') {
            return redirect('dashboard');
        } 
        elseif (Auth::user()->level == 'Customer') {
            return redirect('/');
        }
    }
}
