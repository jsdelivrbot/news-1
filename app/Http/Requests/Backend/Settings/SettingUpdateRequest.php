<?php

namespace App\Http\Requests\Backend\Settings;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            "tittle" => "max:150|min:5",
            "email" => "email",
            "description" => "max:150|min:10",
            "logo" => "image|mimes:jpg,jpeg,png|max:2048"
        ];
    }

    public function messages()
    {
        return [

            "tittle.max" => "En fazla :max karakter olabilir",
            "tittle.min" => "En az :min karakter olmalıdır",



            "description.max" => "En fazla :max karakter olabilir",
            "description.min" => "En az :min karakter olmalıdır",


            "logo.image" => "Resim dosyası seçin",
            "logo.mimes" => "Resmin uzantısı yalnız 'jpg', 'jpeg', 'png' olabilir",
            "logo.max" => "Dosya boyutu en fazla :max kb olabilir",
        ];
    }
}
