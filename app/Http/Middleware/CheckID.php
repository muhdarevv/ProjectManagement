<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Project;

class CheckID
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
        $projectid= $request->id; //nak dapatkan project id dari parameter url{}

        $userid= Project::find($projectid);

        if (auth()->user()->id==$userid['user_id'])
        {
            return $next($request);  //compare user auth id and project id ( user_id)

        }
        
        abort(403, 'You Have No Access To Project',);
        
    }
}
