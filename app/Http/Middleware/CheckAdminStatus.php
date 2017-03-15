<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class CheckAdminStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if(!Auth::user()->isAdmin()) {             
            return redirect('/')                 
                ->with('status', 'You don\'t have the necessary roles to do that!');         
            }         

            return $next($request);
    }
}
