<?php

namespace App\Http\Middleware;
use Closure;
use DB;
use Session;
use App\Http\Middleware\Redirect;
class CheckTypeUser
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
    
          if (Session::has('name')) {
               return $next($request);
          }    
          return redirect()->route('login');
        /*dd("da vao Middleware");*/
    }
}
