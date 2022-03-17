<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserStoreRequest extends FormRequest
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
            "name" => "required|min:4|max:30",
            "email_address" => "required|email|unique:students,email_address,".(
                ($this->has('id')) ? $this->id : ''),
            
            "sex" => [
                "required",
                Rule::in(["Male", "Female", "Other"]),
            ],
            "place_of_birth" => "required|min:2|max:40",
            "date_of_birth" => "required|before:".date("Y-m-d", strtotime("-14 years")),
                       
        ];
    }
}
