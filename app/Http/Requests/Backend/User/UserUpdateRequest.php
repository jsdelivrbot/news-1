<?php

namespace App\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            "name" => "required|max:150|min:3",
            "password" => "nullable|max:150|min:3",
            "email" => "required",
            "avatar" => "image|mimes:jpg,jpeg,png|max:2048",

        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Bu alan gerekli",
            "name.max" => "En fazla :max karakter olabilir",
            "name.min" => "En az :min karakter olmalıdır",

            "password.nullable" => "Bu alan nullable",
            "password.max" => "En fazla :max karakter olabilir",
            "password.min" => "En az :min karakter olmalıdır",

            "email.required" => "Bu alan gerekli",


            "image.image" => "Resim dosyası seçin",
            "image.mimes" => "Resmin uzantısı yalnız 'jpg', 'jpeg', 'png' olabilir",
            "image.max" => "Dosya boyutu en fazla :max kb olabilir",


        ];
    }
}
