<?php

namespace App\Http\Middleware;

use Closure;

class checklogin
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

//        if (Auth::check() && Auth::user()->MA_VG == 1) {
//            return $next($request);
//        }else{
//            return redirect()->route('login');
//        }
    }
}
