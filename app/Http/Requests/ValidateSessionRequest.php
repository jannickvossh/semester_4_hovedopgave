<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSessionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username'          => ['bail', 'required'],
            'password'          => ['bail', 'required']
        ];
    }

    public function attributes(): array
    {
        return [
            'username'          => 'Username',
            'password'          => 'Password'
        ];
    }

    public function messages(): array
    {
        return [
            'required'          => ':attribute needs to be filled out'
        ];
    }
}
