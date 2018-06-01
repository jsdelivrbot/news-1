<?php

namespace App\Http\Requests\Backend\Article;

use Illuminate\Foundation\Http\FormRequest;

class ArticleCreateRequest extends FormRequest
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
            "category_id" => "required",
            "content" => "required|min:10",
            "image" => "required|image|mimes:jpg,jpeg,png|max:2048"
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

            "category_id.required" => "Bu alan gerekli",

            "image.required" => "Bir resim seçiniz",
            "image.image" => "Resim dosyası seçin",
            "image.mimes" => "Resmin uzantısı yalnız 'jpg', 'jpeg', 'png' olabilir",
            "image.max" => "Dosya boyutu en fazla :max kb olabilir",


        ];
    }
}
