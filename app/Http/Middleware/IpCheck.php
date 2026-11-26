<?php

namespace App\Http\Middleware; 

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IpCheck 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dump("ipCheck middleware is working"); 
        if($request->ip() == '127.0.0.1'){
            return $next($request);
        }
        //return home
        return redirect('/');
        // return $next($request);
    }
}
