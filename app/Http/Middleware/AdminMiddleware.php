<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Allow the request through only if an admin is logged in,
     * otherwise redirect to the admin login page.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! auth()->check() || ! auth()->user()->is_admin) {
            return redirect()->route('admin.login')->withErrors([
                'email' => 'Please login as admin to continue.',
            ]);
        }

        return $next($request);
    }
}
