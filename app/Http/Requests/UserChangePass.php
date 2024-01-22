<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserChangePass extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'current_password' => [
                'required'
            ],
            'password' => [
                'required',
                'string',
                'min:6',
                'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+$/',
                'confirmed'
            ],
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Không được bỏ trống.',
            'confirmed' => 'Mật khẩu không khớp.',
            'regex' => 'Mật khẩu phải chứa ít nhất 1 chữ cái và 1 chữ số.',
            'min' => 'Mật khẩu phải dài hơn 6 ký tự.',
        ];
    }
}
