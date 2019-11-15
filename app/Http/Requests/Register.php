<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;
class Register extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $min=Carbon::now()->subYear(12);
        return [
            'name' => 'required',
            'username' => 'required|unique:admins,username|unique:students,username',
            'email' => 'required|unique:admins,email|unique:students,email',
            'password' => 'required|confirmed|min:8',
            'phone' => 'required|regex:/\+?(880)?01[3456789][0-9]{8}\b/|max:14|min:11|unique:students,phone',
            'gender' => 'required',
            'id' => 'required',
            'address' => 'required',
            'dob' => "required|before:$min",
        ];
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
            'address.required'  => 'Enter your Address',
            'id.required'  => 'Please Choose at Least one subject',
            'dob.required'  => 'Please Enter You Date of Birth',
            'dob.before'  => 'Your Age should be at least 12 Years to registration',
        ];
    }
}
