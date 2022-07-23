<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Session;

class islogin
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
        if(Session::has('manager')){
            $getPath = request()->getPathInfo();

            if(
                $getPath == '/Raqib/profile'||
                $getPath == '/Raqib/logout'
                ){
                return $next($request);
            }
            else{
                return redirect('/Raqib/profile');
            }

        }
        else
          if(Session::has('teacher')){
            $getPath = request()->getPathInfo();


            if(
                $getPath == '/Raqib/profile'||
                $getPath == '/Raqib/logout'
                ){
                return $next($request);
            }
            else{
                return redirect('/Raqib/profile');
            }

        }

        else
           if(Session::has('student')){
            $getPath = request()->getPathInfo();
            if(
                $getPath == '/Raqib/profile'||
                $getPath == '/Raqib/logout'
                ){
                return $next($request);
            }
            else{
                return redirect('/Raqib/profile');
            }
        }
        else{
            return $next($request);
        }

    }
}
