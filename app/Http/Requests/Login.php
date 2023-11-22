<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        $emailRule = 'unique:users';
        if ($this->method() == 'PATCH') {
            $emailRule = 'unique:users,email,'.$this->user;
        }

        return [
            'name' => 'required',
            'email' => 'required|email|'.$emailRule,
            'password' => 'required|min:6',
        ];
    }
}
