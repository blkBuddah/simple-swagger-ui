<?php

namespace Ornikar\SwaggerUi\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Request;

class DumbMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
