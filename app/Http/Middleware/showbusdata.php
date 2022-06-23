<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class showbusdata
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!(session('showbusdata')==true)){
            return redirect('/');
        }
        session()->pull('showbusdata');
        return $next($request);
    }
}
