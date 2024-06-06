<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepositRequest;
use App\Models\Payment_Method;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    public function deposit(DepositRequest $request)
    {
        $payment_method = Payment_Method::find($request->paymentMethod);
        if (!$payment_method) {
            return response()->json([
                "status" => "error",
                "msg" => "Yều cầu nạp tiền thất bại"
            ], 404);
        }

        $endpoint = config("banking.momo.endpoint");
        $partnerCode = config("banking.momo.partner_code");
        $accessKey = config("banking.momo.access_key");
        $secretKey = config("banking.momo.secret_key");

        $feePrice = (int)$request->amount * ($payment_method->fee / 100);
        $totalPrice = (int)$request->amount + $feePrice;

        $orderInfo = "Nạp tiền qua " . strtolower($payment_method->name);
        $orderId = time() . "";
        $redirectUrl = route("deposit.render");
        $ipnUrl = route("deposit.render");
        $extraData = "";
        $requestId = time() . "";
        $requestType = "captureWallet";
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $totalPrice . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $totalPrice,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );

        $result = $this->execPostRequest($endpoint, json_encode($data));
        if (!$result) {
            return response()->json([
                "status" => "error",
                "msg" => "Yều cầu nạp tiền thất bại"
            ], 500);
        }

        $jsonResult = json_decode($result, true);
        return response()->json([
            "status" => "success",
            "url" => $jsonResult["qrCodeUrl"],
            "data" => [
                "fee" => $payment_method->fee,
                "feePrice" => $feePrice,
                "totalPrice" => $totalPrice
            ],
        ], 200);
    }
}
