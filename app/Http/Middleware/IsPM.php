<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsPM
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->usertype==1)
        {
            return $next($request);

        }
        //return redirect('home')->with('error', "You Don't Have access to admin");
        abort(403, 'You Have No Access To Project Manager ',);
        
    }
}
