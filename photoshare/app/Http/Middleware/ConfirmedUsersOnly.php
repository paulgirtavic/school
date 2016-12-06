<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ConfirmedUsersOnly
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
        if(Auth::user()->is_confirmed){
            return $next($request);
        }else{
            Auth::logout();
            return redirect('/WaitingAuth');
        }
    }
}
