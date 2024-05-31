<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class LocalLoginRequest extends FormRequest
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
            "email.string" => ":attribute không đúng định dạng",
            "email.max" => ":attribute không đúng định dạng",
            "email.email" => ":attribute không đúng định dạng",
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
