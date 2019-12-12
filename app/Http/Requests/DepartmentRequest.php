<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:departments',
            'minimum' => 'required|integer|between:1,100',
            'slug' => 'nullable|string',
            'subject_id' => 'required',
            'range' => 'nullable|integer|between:1,100|required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please Enter a Name',
            'minimum.required' => 'Enter a Minimum Number for enroll',
            'minimum.between' => 'Percentage should be between 1 to 100',
            'slug.string' => 'Enter a short name that is suitable for identify',
            'subject_id.required' => 'Please select a subjects before entering Percentage',
            'range.required' => 'Please select a number for the subject',
            'range.between' => 'Percentage should be between 1 to 100',
        ];
    }

}
