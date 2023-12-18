<?php

namespace Tots\Role\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Verifica si el usuario tiene el rol necesario para acceder a la ruta
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if($request->user()->role != $role){
            throw new \Exception('Not has permission');
        }

        return $next($request);
    }
}
