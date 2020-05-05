<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Voter
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 0) {
            return redirect()->route('admin');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('candidate');
        }

        if (Auth::user()->role == 2) {
            return $next($request);
        }

        //return $next($request);
    }
}
