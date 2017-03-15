<?php

namespace App\Http\Middleware;

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
        if(!Auth::user()->roles->pluck('name')->contains('admin')) {             
            return redirect('/')                 
                ->with('status', 'You don\'t have the necessary roles to do that!');         
            }         

            return $next($request);
    }
}
