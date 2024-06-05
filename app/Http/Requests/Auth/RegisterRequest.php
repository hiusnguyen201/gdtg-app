<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class RegisterRequest extends FormRequest
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
            'name' => "required|string|max:100",
            "email" => "required|string|max:150|email|unique:users,email",
            "phone" => ['required', 'string', 'regex:/^(84|0[3|5|7|8|9])+([0-9]{8})\b/'],
            "password" => 'required|string|min:4|confirmed',
            "password_confirmation" => "required|string"
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute không được để trống',
            'name.string' => ":attribute không đúng định dạng",
            'name.max:100' => ":attribute đã vượt quá :max ký tự",
            'phone.required' => ':attribute không được để trống',
            'phone.string' => ":attribute không đúng định dạng",
            'phone.regex' => ':attribute phải là số việt nam',
            'email.required' => ":attribute không được để trống",
            'email.string' => ":attribute không đúng định dạng",
            'email.max:15' => ":attribute đã vượt quá :max ký tự",
            'email.email' => ":attribute không đúng định dạng",
            'password.required' => ':attribute không được để trống',
            'password.string' => ':attribute không đúng định dạng',
            'password.min:4' => ':attribute có ít nhất :min ký tự',
            'password.confirmed' => ':attribute không khớp',
            'password_confirmation.required' => ':attribute không được để trống',
            'password_confirmation.string' => ':attribute không đúng định dạng',
        ];
    }

    public function attributes()
    {
        return [
            'name' => "Tên",
            'phone' => 'Điện thoại',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'password_confirmation' => 'Nhập lại mật khẩu'
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
