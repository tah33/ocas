<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'question' =>  'required',
            'option1'  =>  'required',
            'option2'  =>  'required',
            'option3'  =>  'required_without_all:option1,option2',
            'option4'  =>  'required_without_all:option1,option2',
        ];
    }

    public function messages()
    {
        return [
            'question.required' => "Please Enter The Question",
        ];
    }
}
