<?php

namespace App\Http\Middleware;
use Closure;
use Redirect;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
            //
        'vt_notif'
    ];


     // public function handle( $request, Closure $next )
	    // {
	    //     if (
	    //         $this->isReading($request) ||
	    //         $this->runningUnitTests() ||
	    //         $this->shouldPassThrough($request) ||
	    //         $this->tokensMatch($request)
	    //     ) {
	    //         return $this->addCookieToResponse($request, $next($request));
	    //     }
	        
	    //     // redirect the user back to the last page and show error
	    //     return Redirect::back()->withErrors( ['Sorry, we could not verify your request. Please try again.'] );
	    // }
}
