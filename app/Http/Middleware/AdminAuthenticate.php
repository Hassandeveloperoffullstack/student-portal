<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        If(Auth::check() && Auth::user()->role == "admin")
        {
            return $next($request);            
        }
        elseif (Auth::check() && Auth::user()->role == "customer") {
            return redirect()->route('dashboard');
        }
        else
        {
         return redirect()->route('login');
        }
       
    }
}
