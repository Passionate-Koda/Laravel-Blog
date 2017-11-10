<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuthor
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
      if(request('author') != "femi"){

        return redirect("/admin/addpost")->with("message", "Please Put Femi");

      }
        return $next($request);
    }
}
D
