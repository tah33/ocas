<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
    {
        return [
            'login' => 'required',
            'password' => 'required',
        ];
//        |regex:^(?:\+88|01)?\d{11}$^
//        |regex:/^(?:\+88|01)?\d{11}$/
    }
    public function messages()
    {
        return [
            'username.required' => 'Please Enter Email/Username',
            'password.required'  => 'Please Enter Your Password',
            ];
    }
}

