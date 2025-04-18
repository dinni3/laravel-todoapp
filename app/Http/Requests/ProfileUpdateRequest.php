<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nickname' => 'nullable|string|max:50',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|email|unique:users,email,' . $this->user()->id,
            'password' => 'nullable|confirmed|min:8',
            'phone' => 'nullable|regex:/^[0-9]{10,15}$/',
            'city' => 'nullable|string|max:100',
        ];
    }
}
