<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class AdminIsLogin
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
        $getPath = $request->path();
        if(Session::has('admin')){
        if($getPath == 'ad/login'){
            return redirect('admin/index');
        }
        return $next($request);
        }
        else{

            if($getPath == 'ad/login'){
                return  $next($request);
            }
            return redirect()->route('admin.login');
        }

    }
}
