<?php

namespace App\Http\Controllers\MID;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\Authorize;
use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Factory as Auth;

class MiddlewareCan extends Authorize
{
    //

    public function handle($request, Closure $next, $ability, ...$models)
    {
        
    	if(Auth::user()){
    		if(!Auth::user()->can('can:ac.dashboard')){
    			if(Auth::user()->can('be.student')){
    				return redirect()->route('db.s.set.profile');
    			}else if(Auth::user()->can('be.coached')){
    				return redirect()->route('db.s.set.coached');
    			}
    		}


    		$this->auth->authenticate();

	        $this->gate->authorize($ability, $this->getGateArguments($request, $models));

        
        	return $next($request);
    	}


        $this->auth->authenticate();

        $this->gate->authorize($ability, $this->getGateArguments($request, $models));

        
        return $next($request);
    }


}
