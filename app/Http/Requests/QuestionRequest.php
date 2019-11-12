<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question' =>  'required',
            'option1'  =>  'required_without_all:option2,option3,option4',
            'option2'  =>  'required_without_all:option1,option3,option4',
            'option3'  =>  'required_without_all:option1,option2,option4',
            'option4'  =>  'required_without_all:option1,option3,option2',
        ];
    }

    public function messages()
    {
        return [
            'question.required' => "Please Enter The Question",
        ];
    }
}
