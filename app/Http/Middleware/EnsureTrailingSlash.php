<?php

// app/Http/Middleware/EnsureTrailingSlash.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTrailingSlash
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the URL doesn't end with a slash and is not an asset or API route
        if (substr($request->path(), -1) !== '/' && !str_contains($request->path(), 'api') && !str_contains($request->path(), 'assets')) {
            return redirect($request->url() . '/');
        }

        return $next($request);
    }
}
