<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
// use Illuminate\Exceptions\HttpResponseException;

class UserRegister extends FormRequest
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
            'avatar' => 'nullable',
            'username' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'phone_number' => 'required|string|unique:users',
            'roles_id' => 'nullable',
            'password' => [
                'required',
                'string',
                'min:6',
                'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+$/'
            ],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Không được bỏ trống.',
            'string' => 'Dữ liệu nhập vào phải là chuỗi ký tự.',
            'email' => 'Email không hợp lệ.',
            'unique' => 'Dữ liệu đã tồn tại.',
            'confirmed' => 'Mật khẩu không khớp.',
            'regex' => 'Mật khẩu phải chứa ít nhất 1 chữ cái và 1 chữ số.',
            'min' => 'Mật khẩu phải dài hơn 6 ký tự.',
        ];
    }
}
