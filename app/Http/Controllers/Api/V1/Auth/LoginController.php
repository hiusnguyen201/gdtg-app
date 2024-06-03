<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LocalLoginRequest;
use App\Http\Requests\Auth\VerifyOtpRequest;
use App\Http\Requests\Auth\ResendOtpRequest;

use App\Models\User;
use App\Models\User_Otp;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    private array $MESSAGE = [
        'INCORRECT_CREDENTIALS' => "Thông tin đăng nhập không chính xác",
        'LOGIN_FAILED' => "Đăng nhập thất bại",
        'LOGIN_SUCCESSFUL' => "Đăng nhập thành công",
        'INVALID_OTP' => "Otp không hợp lệ hoặc đã hết hạn",
        'TOKEN_OTP_INVALID' => "Token otp không hợp lệ",
        'RESEND_OTP_SUCCESSFUL' => "Gửi lại otp thành công",
        'RESEND_OTP_FAILED' => "Gửi lại otp không thành công",
        'VERIFY_OTP_FAILED' => 'Xác thực otp thất bại',
        "INFO_VERIFY_OTP" => 'Vui lòng xác minh OTP để hoàn tất quá trình đăng nhập',
        "USER_NOT_FOUND" => "Người dùng không tìm thấy"
    ];

    public function localLogin(LocalLoginRequest $request)
    {
        $credentials = array(
            "email" => $request->email,
            "password" => $request->password
        );

        if (!auth()->attempt($credentials)) {
            return response()->json([
                'status' => 'error',
                'type' => 'handle',
                'msg' => $this->MESSAGE['INCORRECT_CREDENTIALS'],
            ], 401);
        }

        $user = User::where("email", $request->email)->first();
        $otpToken = $user->generateOtpToken();

        try {
            $user_otp = $user->createOtp($otpToken);
            $user->sendOtp($user_otp->otp);

            return response()->json([
                'status' => 'success',
                'msg' => $this->MESSAGE['INFO_VERIFY_OTP'],
                'url' => route("otp.render") . "?token=" . $user_otp->id . "|" . $otpToken,
            ], 200);
        } catch (\Exception $e) {
            auth()->logout();
            return response()->json([
                'status' => 'error',
                'type' => 'exception',
                'msg' => $this->MESSAGE['LOGIN_FAILED'],
            ], 500);
        }
    }

    public function verifyOtp(VerifyOtpRequest $request)
    {
        [$id, $token] = explode("|", $request->token, 2);
        $user_otp = User_Otp::find($id);
        $user = $user_otp->getUser;

        try {
            [$status, $data] = $user->verifyOtp($request->otp);
            if (!$status) {
                return response()->json([
                    'status' => 'error',
                    'msg' => $this->MESSAGE['INVALID_OTP'],
                    ...$data
                ], 401);
            }

            $user->tokens()->delete();
            $token = $user->createToken("API TOKEN")->plainTextToken;

            return response()->json([
                'status' => 'success',
                'msg' => $this->MESSAGE['LOGIN_SUCCESSFUL'],
                'url' => "/",
            ], 200)->cookie("token", encrypt($token));
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'type' => 'exception',
                'msg' => $this->MESSAGE['VERIFY_OTP_FAILED'],
            ], 500);
        }
    }

    public function resendOtp(ResendOtpRequest $request)
    {
        [$id, $token] = explode("|", $request->token, 2);
        $user_otp = User_Otp::find($id);
        $user = $user_otp->getUser;

        try {
            $user->resendOtp();

            return response()->json([
                'status' => 'success',
                'msg' => $this->MESSAGE['RESEND_OTP_SUCCESSFUL'],
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'success',
                'msg' => $this->MESSAGE['RESEND_OTP_FAILED'],
            ], 200);
        }
    }
}
