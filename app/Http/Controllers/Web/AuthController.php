<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\OtpRequest;

use App\Models\User_Otp;

use App\Jobs\SendOtpJob;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view("auth.login");
    }

    public function handleLocalLogin(LoginRequest $request)
    {
        $credentials = array(
            "email" => $request->input("email"),
            "password" => $request->input("password")
        );

        if (!Auth::attempt($credentials)) {
            return redirect()->route("login.index")->with([
                "error" => "Email hoặc mật khẩu của bạn không chính xác"
            ])->withInput();
        }

        try {
            $this->sendOtpToEmail(Auth::user());
            return redirect()->route("otp.index");
        } catch (\Exception $e) {
            Auth::logout();
            return redirect()->route("login.index")->with([
                "exceptionError" => "Đăng nhập thất bại"
            ])->withInput();
        }
    }

    public function otpPage()
    {
        return view("auth.otp");
    }

    public function handleVerifyOtp(OtpRequest $request)
    {
        $user_otp_existed = User_Otp::where(["user_id" => Auth::id(), "otp" => $request->input("otp")])->first();
        if (!$user_otp_existed) {
            return redirect()->route("otp.index")->with([
                "error" => "Mã xác thực không chính xác"
            ]);
        }

        if (Carbon::now()->gt($user_otp_existed->expire_at)) {
            return redirect()->route("otp.index")->with([
                "error" => "Mã xác thực đã hết hạn"
            ]);
        }

        $user_otp_existed->delete();

        return redirect()->route("home.index")->with([
            "actionSuccess" => "Đăng nhập thành công"
        ]);
    }

    public function handleResendOtp()
    {
        try {
            $this->sendOtpToEmail(Auth::user());
            session()->flash("success", "Đã gửi mã otp");
        } catch (\Exception $e) {
            session()->flash("exceptionError", "Gửi mã otp thất bại");
        }

        return redirect()->route("otp.index");
    }

    public function handleLogout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route("login.index");
    }

    public function homePage()
    {
        return view("customer.home");
    }

    public function sendOtpToEmail($user)
    {
        $user_otp_existed = User_Otp::where(["user_id" => $user->id])->first();
        if ($user_otp_existed) $user_otp_existed->delete();

        $otp = rand(100000, 999999);
        User_Otp::create([
            "otp" => $otp,
            "user_id" => $user->id,
            "expire_at" => Carbon::now()->addMinutes((int)env("OTP_MINUTES_EXPIRED", 1))
        ]);

        $details = ["email" => $user->email, "otp" => $otp];
        SendOtpJob::dispatch($details);

        return;
    }
}
