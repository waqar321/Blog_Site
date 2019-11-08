<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;


class checkhome
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

    if($request->isMethod('get')){

            if ($request->session()->has('key')) {
                return redirect('Loginpage')->with("status","Login By:  ".session('key'));
            }else{
                return redirect('Loginpage')->with("status", "Please Loggin To Access the Page!!!");
            }
        }

        return $next($request);
    }
}
