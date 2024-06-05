<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    private array $MESSAGE = [
        "INFO_VERIFY_OTP" => 'Đăng ký thành công! Vui lòng xác minh OTP để hoàn tất quá trình đăng nhập',
        "REGISTER_FAILED" => "Đăng ký thất bại",
    ];

    public function register(RegisterRequest $request)
    {
        $roleClient = Role::where("name", 'customer')->first();
        if (!$roleClient) {
            $roleClient = Role::create([
                "name" => "client"
            ]);
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'status' => config("enums.user_status.inactive.value"),
                'role_id' => $roleClient->id,
                'password' => Hash::make($request->password),
            ]);

            $otpToken = $user->generateOtpToken();
            $user_otp = $user->createOtp($otpToken);
            $user->sendOtp($user_otp->otp);

            return response()->json([
                'status' => 'success',
                'msg' => $this->MESSAGE['INFO_VERIFY_OTP'],
                'url' => route("otp.render") . "?token=" . $user_otp->id . "|" . $otpToken,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'msg' => $this->MESSAGE['REGISTER_FAILED'],
                'e' => $e->getMessage()
            ], 500);
        }
    }
}
