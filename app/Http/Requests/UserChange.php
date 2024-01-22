<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserChange extends FormRequest
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
            'email' => 'required|string|email|unique:users',
            'phone_number' => 'required|string|unique:users',
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
        ];
    }
}
