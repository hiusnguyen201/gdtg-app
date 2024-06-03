<?php

namespace App\Http\Requests\Auth;

use App\Rules\ExistTokenOtp;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class VerifyOtpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request): array
    {
        return [
            "otp" => [
                "required",
                "integer",
                "min:6",
            ],
            "token" => ["required", new ExistTokenOtp]
        ];
    }

    public function messages()
    {
        return [
            "otp.required" => ":attribute không được để trống",
            "otp.integer" => ":attribute không đúng định dạng",
            "otp.min" => ":attribute không đúng định dạng",
            "token.required" => ":attribute không được để trống"
        ];
    }

    public function attributes()
    {
        return [
            "otp" => "Mã xác thực",
            "token" => "Token"
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        $response = response()->json([
            'status' => 'error',
            'type' => 'validate',
            'msg' => $errors->messages(),
        ], 400);

        throw new HttpResponseException($response);
    }
}
