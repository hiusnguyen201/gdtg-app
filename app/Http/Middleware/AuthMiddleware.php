<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!isset($_COOKIE['token'])) return redirect()->route("login.render");
        try {
            $tokenFull = decrypt($_COOKIE['token']);
            $personalAccessToken = PersonalAccessToken::findToken($tokenFull);

            if (!$personalAccessToken) throw new \Exception("Token not found");

            return $next($request);
        } catch (\Exception $e) {
            setcookie('token', '', -1, '/');
            return redirect()->route("login.render");
        }
    }
}
