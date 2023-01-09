<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminM
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
        if(Auth::user()->usertype == 'admin'){
            return $next($request); 
        }
        elseif(Auth::user()->usertype == 'super'){
           return redirect('admin_dashboard'); 
          // return $next($request); 
        }
        else{
            return redirect('/home')->with('Status','Karibu Blackscience technologies');

        }
        
    }
}
