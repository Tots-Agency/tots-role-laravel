<?php

namespace Tots\Role\Http\Middleware;

use Closure;

class RoleLikeParamMiddleware
{
    /**
     * Obtiene el role asignado y lo pasa al controlador
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        return $next($request->merge(['role' => $role]));
    }
}
