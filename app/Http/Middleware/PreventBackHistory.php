<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        return $response->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                        ->header('Pragma','no-cache')
                        ->header('Expires','Sat, 01 Jan 1990 00:00:00 GMT');
    }
}

// Cache-Control: no-cache, no-store, max-age=0, must-revalidate
// no-cache: Instructs browsers to revalidate with the server before using a cached copy.
// no-store: Prevents any caching at all (by browsers or intermediate caches).
// max-age=0: Indicates that the content is stale immediately after it's received.
// must-revalidate: Forces caches to obey freshness information.
// Pragma: no-cache
// This is an older HTTP/1.0 header for disabling caching. It's added for compatibility with older clients.
// Expires: Sat, 01 Jan 1990 00:00:00 GMT
// This sets an expiration date in the past, ensuring the browser treats the response as expired