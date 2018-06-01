<?php

namespace App\Http\Requests\Backend\Page;

use Illuminate\Foundation\Http\FormRequest;

class PageUpdateRequest extends FormRequest
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
            "tittle" => "required|max:150|min:5",
            "content" => "required|min:10",
        ];
    }


    public function messages()
    {
        return [
            "tittle.required" => "Bu alan gerekli",
            "tittle.max" => "En fazla :max karakter olabilir",
            "tittle.min" => "En az :min karakter olmalıdır",

            "content.required" => "Bu alan gerekli",
            "content.max" => "En fazla :max karakter olabilir",
            "content.min" => "En az :min karakter olmalıdır",


        ];
    }
}
