<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Sanctum\PersonalAccessToken;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!isset($_COOKIE['token'])) return $next($request);

        try {
            $tokenFull = decrypt($_COOKIE['token']);
            $personalAccessToken = PersonalAccessToken::findToken($tokenFull);

            if (!$personalAccessToken) {
                return $next($request);
            }

            return redirect()->back();
        } catch (\Exception $e) {
            return $next($request);
        }
    }
}
