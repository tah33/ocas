<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
            'name' => 'required',
            'minimum' => 'required|integer|between:1,100',
            'slug' => 'nullable|string',
            'id' => 'nullable|required_with:range',
            'range' => 'nullable|integer|between:1,100|required_with:id',
            'subject_id' => 'nullable|required_with:total',
            'total' => 'nullable|integer|between:1,100|required_with:subject_id',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please Enter a Name',
            'minimum.required' => 'Enter a Minimum Number for enroll',
            'minimum.between' => 'Range should be between 1 to 100',
            'slug.string' => 'Enter a short name that is suitable for identify',
            'id.required_with' => 'Please select a subject before entering marks',
            'range.required_with' => 'Please select a number for the subject',
            'range.between' => 'Range should be between 1 to 100',
            'subject_id.required_with' => 'Please select a subjects before entering marks',
            'total' => 'Please select a mark for the subjects',
        ];
    }

}
