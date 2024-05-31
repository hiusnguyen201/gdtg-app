<?php

namespace App\Http\Requests\Auth;

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
            "userId" => "required|integer|min:1",
            "otp" => [
                "required",
                "integer",
                "min:6",
            ],
        ];
    }

    public function messages()
    {
        return [
            "otp.required" => ":attribute không được để trống",
            "otp.integer" => ":attribute không đúng định dạng",
            "otp.min" => ":attribute không đúng định dạng",
            "userId.required" => ":attribute không được để trống",
            "userId.string" => ":attribute không tìm thấy",
            "userId.max" => ":attribute không tìm thấy",
        ];
    }

    public function attributes()
    {
        return [
            "otp" => "Mã xác thực",
            "userId" => "Người dùng",
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
