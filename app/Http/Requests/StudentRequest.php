<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Admin\Student;

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
        $student = null;

        if ($this->student) {
            $student = Student::select('user_id')->where('id', $this->student->id)->first();  
        }

        return [
            'student_exam_number' => 'required|numeric|unique:students,student_exam_number,'.optional($this->student)->id,
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email,'.optional($student)->user_id,
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
            'photo' => $student === null ? 'required|file' : 'nullable',
        ];
    }
}
