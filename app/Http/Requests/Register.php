<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'username' => 'required|unique:admins,username|unique:students,username',
            'email' => 'required|unique:admins,email|unique:students,email',
            'password' => 'required|confirmed|min:8',
            'phone' => 'required',
            'gender' => 'required',
            'id' => 'required',
        ];
//        |regex:^(?:\+88|01)?\d{11}$^
//        |regex:/^(?:\+88|01)?\d{11}$/
    }
    public function messages()
    {
        return [
            'name.required' => 'Please Enter Your Name',
            'username.required'  => 'Please Choose a Username',
            'username.unique'  => 'This Username is alreay taken',
            'email.required'  => 'Please enter a Email',
            'email.unique'  => 'This email is alreay taken',
            //'image.mimes' => 'Please choose a correct image',
            'password.required'  => 'Please enter a Password',
            'password.confirmed'  => 'Password Confirmation Does Not Match',
            'password.min'  => 'Password should be Minimum of 8 Characters',
            'gender.required'  => 'Please Choose a Gender',
            'phone.required'  => 'Enter your phone number',
            'id.required'  => 'Please Choose at Least one subject',
        ];
    }
}
