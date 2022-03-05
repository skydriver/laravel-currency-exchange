<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class InternalBearerAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        var_dump('test ' . $request->bearerToken());
        var_dump($request->headers);
        if ($request->bearerToken() !== env('INTERNAL_USER_API_TOKEN')) {
            return response()->json([
                'error' => true,
                'message' => 'Access denied',
            ], 401);
        }

        return $next($request);
    }
}
