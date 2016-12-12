<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
<<<<<<< HEAD
<<<<<<< HEAD
            return redirect('/home');
=======
            return redirect('/dashboard');
>>>>>>> 1f07036a857f5e6f8719afd517355e7bef1e781e
=======
            return redirect('/home');
>>>>>>> bd64c36f1600dca200cbffa95d664555d61f4ab7
        }

        return $next($request);
    }
}
