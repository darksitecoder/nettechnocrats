<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTrailingSlash
{
    public function handle(Request $request, Closure $next)
    {
        // If the flag exists in session, it means we already redirected once
        if ($request->session()->has('redirected_to_trailing_slash')) {
            return $next($request);
        }

        // Log the requested URL
        \Log::info('Requested URL: ' . $request->url());

        // Check if the requested URL does not already end with a slash
        if (substr($request->path(), -1) !== '/') {
            // Log the redirection URL
            \Log::info('Redirecting to: ' . $request->url() . '/');

            // Set the session flag to prevent further redirects
            $request->session()->put('redirected_to_trailing_slash', true);

            // Perform the redirection to the URL with a trailing slash
            return redirect($request->url() . '/', 301);
        }

        // Continue to the next middleware or controller
        return $next($request);
    }
}
