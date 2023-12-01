<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Respone;
//tambahan
use Auth;


class Peran
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $peran): Response
    {
        if(Auth::check()){
            $perans = explode('-', $peran);
            foreach ($perans as $group){
                if(Auth::user()->role == $group){
                    return $next($request);
                }
            }
        }
        return redirect('/access-denied');
    }
}
