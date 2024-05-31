<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\User;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!isset($_COOKIE['user'])) return redirect()->route("login.render");

        try {
            $id = decrypt($_COOKIE['user']);
            $user = User::find($id);

            if (!$user) {
                throw new \Exception("User not found");
            }

            return $next($request);
        } catch (\Exception $e) {
            setcookie('user', '', -1, '/');
            return redirect()->route("login.render");
        }
    }
}
