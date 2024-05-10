<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class OtpRequest extends FormRequest
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
        ];
    }

    public function messages()
    {
        return [
            "otp.required" => ":attribute không được để trống",
            "otp.integer" => ":attribute không hợp lệ",
            "otp.min" => ":attribute không hợp lệ",
        ];
    }

    public function attributes()
    {
        return [
            "otp" => "Mã xác thực",
        ];
    }
}
