<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleRequest extends FormRequest
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
            'department_id'=>'required',
            'subject_id'=>'required',
            'range'=>'required|between:1,100',
        ];
    }
    public function messages()
    {
        return [
            'department_id.required' => "Please Choose a Department",
            'subject_id.required' => "Please Choose a Subject",
            'range.required' => "Please Enter The range",
            'range.between' => "Please Enter The range between 1 to 100",
        ];
    }
}
