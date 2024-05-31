<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$_COOKIE['token']) return redirect()->route("login.render");
        try {
            $tokenFull = decrypt($_COOKIE['token']);
            [$id, $token] = explode('|', $tokenFull, 2);
            $accessToken = PersonalAccessToken::find($id);
            if (!$accessToken) {
                throw new \Exception("Token not found");
            }

            if (!hash_equals($accessToken->token, hash('sha256', $token))) {
                throw new \Exception("Token not found");
            }

            return $next($request);
        } catch (\Exception $e) {
            setcookie('token', '', -1, '/');
            return redirect()->route("login.render");
        }
    }
}
