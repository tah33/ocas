<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required',
            'username' => 'required|unique:admins,username|unique:students,username',
            'email' => 'required|unique:admins,email|unique:students,email'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please Enter a Name',
            'username.required' => 'Please Enter a UserName',
            'email.required' => 'Please Enter a Email',
            'email.unique' => 'Email is already Exists',
            'username.unique' => 'Username is already Exists',
        ];
    }
}
