<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        //dd($request->user()->admin);
        if ( $request->user()->admin  === null) //chequear que no sea admin )
        {
            return redirect('/');
        }
       
        return $next($request);
 
    }

    
}
