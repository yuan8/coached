<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;

class CustomeMiddleware
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
        
        // if(Auth::user()){
        //     return redirect('/test2');
        // }else{
            return $next($request);
        // }


    }
}
