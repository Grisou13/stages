<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;

class CheckFriendlyId
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
        $response = $next($request);
        $response = $response instanceof RedirectResponse ? $response : response($response);
        if(app()->environment() == 'local'){

            if($request->get("teacher",false)){//if we wanted to test the teacher mode
                $response->header('X-Forwarded-User','XCL');
            }
            else{
                $response->header('X-Forwarded-User','TRI');
            }
            return $response;
        }

        if($u = $request->header('X-Forwarded-User',false)){
            if(\Auth::attempt(["intranet_id"=>$u,'password'=>""]))
            {

            }
            return $response;
        }

        return abort(403);

    }
}
