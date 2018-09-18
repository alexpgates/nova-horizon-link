<?php

namespace Alexpgates\HorizonLink\Http\Middleware;

use Alexpgates\HorizonLink\HorizonLink;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(HorizonLink::class)->authorize($request) ? $next($request) : abort(403);
    }
}
