<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'student_exam_number' => 'required|numeric|unique:students',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|numeric',
            'zip_code' => 'numeric',
            'hobby' => 'nullable',
            'age' => 'required|numeric',
            'majors' => 'required',
            'class' => 'required',
            'address' => 'required',
            'gender' => 'required|boolean',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required|date',
            'photo' => 'required|file',
        ];
    }
}
