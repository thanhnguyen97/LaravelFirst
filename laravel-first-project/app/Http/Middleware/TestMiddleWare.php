<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleWare
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
        dd('cc');
        return $next($request);
    }
}
