<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
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
            'name'=>'required',
            'surname'=> 'required',
            'email'=> 'required|email',
            'bday' => 'required'
//            'level' => 'required|min:4|max:200',
//            'login' => 'required|min:5|max:200',
//            'password' => 'required|min:8|max:40'
        ];
    }
}
