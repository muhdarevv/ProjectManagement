<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsPL
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
        if (auth()->user()->usertype==0)
        {
            return $next($request);

        }
        return redirect('projectmanager/home')->with('error', "You Don't Have access to Project Leader");
        //abort(403, 'You Have No Access To Project Leader ',);
        
    }
}
