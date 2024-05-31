<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\OtpRequest;

use App\Models\User_Otp;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage(Request $request)
    {
        return view("auth.login");
    }

    public function otpPage(Request $request)
    {
        return view("auth.otp", [
            "isLogged" => true
        ]);
    }

    public function registerPage()
    {
        return view("auth.register");
    }
}
