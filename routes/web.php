<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\TokenMiddleware;

Route::middleware(GuestMiddleware::class)->group(function () {
    Route::get("/login", [AuthController::class, "loginPage"])->name("login.render");
    Route::get("/register", [AuthController::class, "registerPage"])->name("register.render");
});

Route::prefix("otp")->middleware([AuthMiddleware::class])->group(function () {
    Route::get("/", [AuthController::class, "otpPage"])->name("otp.render");
});

Route::get("/", [HomeController::class, "homePage"])->name("home.render");

Route::middleware([TokenMiddleware::class])->group(function () {
    Route::get("/buyer-create", [HomeController::class, "buyerCreatePage"])->name("buyerCreate.render");
    Route::get("/seller-create", [HomeController::class, "sellerCreatePage"])->name("sellerCreate.render");
});

/*
    $phone = "+84383460015";                                qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq`

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