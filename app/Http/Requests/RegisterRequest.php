<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users
    }

    public function rules()
    {
        return [
            'name' => 'required|string|regex:/^[A-Za-z ]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'name.regex' => 'Name must only contain letters and spaces.',
        ];
    }
}
