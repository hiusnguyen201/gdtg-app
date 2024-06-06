<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class DepositRequest extends FormRequest
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
            "amount" => "required|integer|min:1000|max:50000000",
            "paymentMethod" => "required|integer|min:1"
        ];
    }

    public function messages()
    {
        return [
            "amount.required" => ":attribute không được để trống",
            "amount.integer" => ":attribute không đúng định dạng",
            "amount.min" => ":attribute nạp ít nhất là 1.000₫",
            "amount.max" => ":attribute nạp tối đa là 50.000.000₫",
        ];
    }

    public function attributes()
    {
        return [
            "amount" => "Số tiền",
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
