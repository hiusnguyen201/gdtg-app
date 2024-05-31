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
    const MESSAGE = [
        'INCORRECT_CREDENTIALS' => "Thông tin đăng nhập không chính xác",
        'LOGIN_FAILED' => "Đăng nhập thất bại",
        'LOGIN_SUCCESSFUL' => "Đăng nhập thành công",
        'INVALID_OTP' => "Otp không hợp lệ",
        'EXPIRED_OTP' => "Otp đã hết hạn",
        'RESEND_OTP_SUCCESSFUL' => "Gửi lại otp thành công",
        'VERIFY_OTP_FAILED' => 'Xác thực otp thất bại',
        "INFO_VERIFY_OTP" => 'Vui lòng xác minh OTP để hoàn tất quá trình đăng nhập',
        "USER_NOT_FOUND" => "Người dùng không tìm thấy"
    ];

    public function localLogin(LocalLoginRequest $request)
    {
        try {
            $credentials = array(
                "email" => $request->email,
                "password" => $request->password
            );

            if (!auth()->attempt($credentials)) {
                return response()->json([
                    'status' => 'error',
                    'type' => 'handle',
                    'msg' => self::MESSAGE['INCORRECT_CREDENTIALS'],
                ], 401);
            }

            $user = User::where("email", $request->email)->first();
            $user->sendOtp();

            return response()->json([
                'status' => 'success',
                'type' => 'verify',
                'msg' => self::MESSAGE['INFO_VERIFY_OTP'],
                'url' => route("otp.render"),
                'data' => [
                    'name' => $user->name,
                    'email' => $user->email,
                    'id' => $user->id,
                ]
            ], 200)->cookie("user", encrypt(auth()->id()));
        } catch (\Exception $e) {
            auth()->logout();
            return response()->json([
                'status' => 'error',
                'type' => 'exception',
                'msg' => self::MESSAGE['LOGIN_FAILED'],
            ], 500);
        }
    }

    public function verifyOtp(VerifyOtpRequest $request)
    {
        try {
            $otp = User_Otp::where([
                "user_id" => $request->userId,
                "otp" => $request->otp,
            ])->first();

            if (!$otp) {
                return response()->json([
                    'status' => 'error',
                    'type' => 'handle',
                    'msg' => self::MESSAGE['INVALID_OTP'],
                ], 404);
            }

            if (now()->gt($otp->expire_at)) {
                $otp->delete();
                return response()->json([
                    'status' => 'error',
                    'type' => 'handle',
                    'msg' => self::MESSAGE['EXPIRED_OTP']
                ], 401);
            }

            $user = $otp->user;
            if (!$user->email_verified_at) {
                $user->update([
                    'email_verified_at' => now()
                ]);
            }

            $otp->delete();

            $user->tokens()->delete();
            $token = $user->createToken("API TOKEN")->plainTextToken;
            setcookie('user', '', -1, '/');

            return response()->json([
                'status' => 'success',
                'type' => 'handle',
                'msg' => self::MESSAGE['LOGIN_SUCCESSFUL'],
                'url' => "/",
            ], 200)->cookie("token", encrypt($token));
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'type' => 'exception',
                'msg' => self::MESSAGE['VERIFY_OTP_FAILED'],
                'something' => $e->getMessage()
            ], 500);
        }
    }

    public function resendOtp(ResendOtpRequest $request)
    {
        $user = User::find($request->userId);
        if (!$user) {
            return response()->json([
                'status' => 'error',
                'type' => 'handle',
                'msg' => self::MESSAGE['USER_NOT_FOUND'],
            ], 404);
        }

        $user->sendOtp();

        return response()->json([
            'status' => 'success',
            'msg' => self::MESSAGE['RESEND_OTP_SUCCESSFUL'],
        ], 200);
    }
}
