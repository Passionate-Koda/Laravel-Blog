<?php

namespace App\Http\Middleware;

use Closure;

class authenticateAdmin
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
      if(!auth()->guard('web_admin')->check()){
        return redirect('/admin')->with("msg", "Please Login First");
      }
        return $next($request);
    }
}
