<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Password extends FormRequest
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
            'old' =>'required',
            'password' =>'required|confirmed|min:8',
        ];
    }
    public function messages()
    {
        return [
            'old.required' =>'Please Enter Your Current Password',
            'password.required'  => 'Please Enter a Password',
            'password.confirmed'  => 'Password Confirmation Does Not Match',
            'password.min'  => 'Password should be Minimum of 8 Characters',
        ];
    }
}
