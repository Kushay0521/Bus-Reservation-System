<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class showbook
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
        if(!(session('showbook')==true)){
            return redirect('showbooking');
        }
        session()->pull('showbook');
        return $next($request);
    }
}
