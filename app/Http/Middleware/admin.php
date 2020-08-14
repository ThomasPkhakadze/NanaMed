<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class admin 
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
        if (false == Auth::guard('admin')->check()) {
            return redirect()->route('view.login.admin');
        }
        return $next($request);
            
    }
    
}
