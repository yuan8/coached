<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\Access\AuthorizationException;
use Auth;
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {

      


        parent::report($exception);



    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    // public function render($request, Exception $exception)
    // {
    //       if ($exception instanceof \Illuminate\Auth\AuthenticationException) {
    //         dd($exception);

    //         // return redirect('path');

    //         // //or simply
    //         // return view('errors.forbidden');
    //         // //but this will return an OK, 200 response.
    //         }

    //         if ($exception instanceof AuthenticationException) {
    //         dd($exception);

    //         // return redirect('path');

    //         // //or simply
    //         // return view('errors.forbidden');
    //         // //but this will return an OK, 200 response.
    //         }



    //         return parent::render($request, $exception);
    // }

    public function render($request, Exception $e)
    {
        // if ($exception instanceof Exception) {
        //     dd($exception);

        //     //Do something 1
        // }
        // if ($exception instanceof \Illuminate\Auth\AuthenticationException) {
        //     //Do something 2
        //     dd($exception);
            
        // }


        if ($e instanceof ModelNotFoundException) {
            $e = new NotFoundHttpException($e->getMessage(), $e);
        }

        if ($e instanceof TokenMismatchException) {
            return redirect()->back()->withInput($request->except('password'))->withErrors(['Validation Token was expired. Please try again']);
        }
        if ($e instanceof AuthorizationException) {

            if(Auth::user()){
                if(!Auth::user()->can('can:ac.dashboard')){
                    if(Auth::user()->can('be.student')){
                        return redirect()->route('db.s.set.profile');
                    }else if(Auth::user()->can('be.coached')){
                        return redirect()->route('db.c.set.profile');
                    }
                }
            return parent::render($request, $e);
            }


        }

        // You can add your own exception here
        // so redirect to the home route
        if ($e instanceof NotFoundHttpException) {
            return redirect()->route('home');
        }


        // dd($request->path());


        return parent::render($request, $e);
    }


    // protected function prepareException(Exception $e)
    // {
    //     if ($e instanceof ModelNotFoundException) {
    //         $e = new NotFoundHttpException($e->getMessage(), $e);
    //     } elseif ($e instanceof AuthorizationException) {
    //         $e = new AccessDeniedHttpException($e->getMessage(), $e);
    //     } elseif ($e instanceof TokenMismatchException) {
    //         $e = new HttpException(419, $e->getMessage(), $e);
    //     }
 
    //     return $e;
    // }
}
