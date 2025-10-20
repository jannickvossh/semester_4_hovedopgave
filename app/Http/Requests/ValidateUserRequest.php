<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUserRequest extends FormRequest
{
    protected $minChar = 1;

    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'firstname'         => ['bail', 'required', "min:$this->minChar"],
            'lastname'          => ['bail', 'required', "min:$this->minChar"],
            'email'             => ['bail', 'required', 'email', 'unique:users,email'],
            'username'          => ['bail', 'required', "min:$this->minChar", 'unique:users,username'],
            'password'          => ['bail', 'required', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'],
            'passwordConfirm'   => ['bail', 'required', 'same:password']
        ];
    }

    public function attributes(): array
    {
        return [
            'firstname'         => 'First name',
            'lastname'          => 'Last name',
            'email'             => 'E-mail address',
            'password'          => 'Password',
            'passwordConfirm'   => 'Password confirm'
        ];
    }

    public function messages(): array
    {
        return [
            'required'          => ':attribute needs to be filled out',
            'min'               => ":attribute must be more than $this->minChar characters long",
            'unique'            => ':attribute must be unique',
            'regex'             => ':attribute is not valid'
        ];
    }
}
