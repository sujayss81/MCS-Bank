<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class check_login_status
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
        if(Session::get('logged_in') == 0){
            return redirect('/')->with('status','Log In First');
        }

        return $next($request);
    }
}
