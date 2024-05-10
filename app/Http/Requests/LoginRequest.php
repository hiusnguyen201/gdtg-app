<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            "email" => "required|string|max:150|email",
            "password" => "required"
        ];
    }

    public function messages()
    {
        return [
            "email.required" => ":attribute không được để trống",
            "email.string" => ":attribute không hợp lệ",
            "email.max" => ":attribute không hợp lệ",
            "email.email" => ":attribute không hợp lệ",
            "password" => ":attribute không được để trống"
        ];
    }

    public function attributes()
    {
        return [
            "email" => "Email",
            "password" => "Password"
        ];
    }
}
