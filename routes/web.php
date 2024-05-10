<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;

Route::prefix("login")->name("login.")->group(function () {
    Route::get('', [AuthController::class, "loginPage"])->name("index");
    Route::post('', [AuthController::class, "handleLocalLogin"])->name("auth");
});

Route::prefix("otp")->name("otp.")->group(function () {
    Route::get('', [AuthController::class, "otpPage"])->name("index");
    Route::post('', [AuthController::class, "handleVerifyOtp"])->name("verify");
    Route::get("resend", [AuthController::class, "handleResendOtp"])->name("resend");
});

Route::prefix("logout")->group(function () {
    Route::get('', [AuthController::class, "handleLogout"])->name("logout");
});

Route::prefix("register")->name("register.")->group(function () {
    Route::get('', [AuthController::class, "registerPage"])->name("index");
});

Route::get('/', [AuthController::class, "homePage"])->name("home.index");

/*
    $phone = "+84383460015";

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://' . env('INFOBIP_BASE_URL', '') . '/sms/2/text/advanced',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{"messages":[{"destinations":[{"to":"' . $phone . '"}],"from":"GDTG App","text":"Hello"}]}',
    CURLOPT_HTTPHEADER => array(
        'Authorization: App ' . env("INFOBIP_KEY", ''),
        'Content-Type: application/json',
        'Accept: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
return $response;
*/