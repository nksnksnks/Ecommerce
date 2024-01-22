<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserClass extends FormRequest
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
            'class_id' => 'required|numeric',
            'user_id' => 'required|numeric|unique:class_users,user_id,NULL,id,class_id,' . request()->input('class_id'),
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Không được bỏ trống.',
            'numeric' => 'Bắt buộc là chữ số',
        ];
    }
}
