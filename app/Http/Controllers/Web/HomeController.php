<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Sanctum\PersonalAccessToken;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function homePage()
    {
        if (isset($_COOKIE['token']) && !auth()->check()) {
            $tokenFull = decrypt($_COOKIE['token']);
            $personalAccessToken = PersonalAccessToken::findToken($tokenFull);
            if ($personalAccessToken) {
                $user = User::find($personalAccessToken->tokenable)->first();
                auth()->loginUsingId($user->id);
            }
        }

        return view("client.home");
    }

    public function logout()
    {
        auth()->logout();
        setcookie('token', '', -1, '/');
        return view("auth.login");
    }

    public function buyerCreatePage()
    {
        return view("client.buyerCreate");
    }

    public function sellerCreatePage()
    {
        return view("client.sellerCreate");
    }
}
