<?php

namespace App\Http\Requests\Backend\Categories;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            "tittle" => "required|max:150|min:3",
            "description" => "required|max:150|min:5",
        ];
    }

    public function messages()
    {
        return [
            "tittle.required" => "Bu alan gerekli",
            "tittle.max" => "En fazla :max karakter olabilir",
            "tittle.min" => "En az :min karakter olmalıdır",

            "description.required" => "Bu alan gerekli",
            "description.max" => "En fazla :max karakter olabilir",
            "description.min" => "En az :min karakter olmalıdır",




        ];
    }
}
