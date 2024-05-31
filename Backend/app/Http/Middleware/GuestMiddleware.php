<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\User;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!isset($_COOKIE['user'])) return $next($request);

        try {
            $id = decrypt($_COOKIE['user']);
            $user = User::find($id);

            if (!$user) {
                throw new \Exception("User not found");
            }

            return redirect()->back();
        } catch (\Exception $e) {
            setcookie('user', '', -1, '/');
            return redirect()->route("login.render");
        }
    }
}
