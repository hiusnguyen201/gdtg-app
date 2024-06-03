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
        if (!$request->token || !str_contains($request->token, "|")) abort(404);

        [$id, $token] = explode("|", $request->token, 2);
        $user_otp = User_Otp::find($id);

        if (!$user_otp || !hash_equals($user_otp->token, hash('sha256', $token))) abort(404);

        return view("auth.otp");
    }

    public function registerPage()
    {
        return view("auth.register");
    }
}
