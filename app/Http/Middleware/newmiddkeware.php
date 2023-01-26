<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class newmiddkeware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->age == 32 ){
           echo 'valo';
            // return $next($request);
        }
        return abort(404);
    }
}
