<?php

namespace App\Http\Requests\Backend\Adword;

use Illuminate\Foundation\Http\FormRequest;

class AdwordUpdateRequest extends FormRequest
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
            "link1" => "nullable",
//            "image1" => "nullable|image|mimes:jpg,jpeg,png|max:2048"
        ];
    }

    public function messages()
    {
        return [
            "link1.nullable" => "Bu alan null",



        ];
    }
}
