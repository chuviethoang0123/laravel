<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth; 

use Closure;
use Illuminate\Http\Request;

class name
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
        {
            if (!auth()->check() || auth()->user()->is_admin != 1){
            return redirect('/');}
    }
    return $next($request);
}
}
