<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use App\Rules\ExistTokenOtp;

class ResendOtpRequest extends FormRequest
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
            "token" => ["required", new ExistTokenOtp]
        ];
    }
    public function messages()
    {
        return [
            "token.required" => ":attribute không được để trống"
        ];
    }

    public function attributes()
    {
        return [
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
