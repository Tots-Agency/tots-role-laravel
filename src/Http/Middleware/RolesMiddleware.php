<?php

namespace Tots\Role\Http\Middleware;

use Closure;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        $roles = explode('|', $roles);
        if(!in_array($request->user()->role, $roles)){
            throw new \Exception('Not has permission');
        }

        return $next($request);
    }
}
