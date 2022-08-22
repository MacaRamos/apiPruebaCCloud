<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCCloudAUth
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
        if ($request->header('x-ccloud-auth') == env('X_CCLOUD_AUTH')){
            return $next($request);
        }else{
            return response()->json([
                'Error' => 'Acceso no autorizado'
            ], 403);
        }
    }
}
