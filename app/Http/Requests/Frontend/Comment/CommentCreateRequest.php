<?php

namespace App\Http\Requests\Frontend\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CommentCreateRequest extends FormRequest
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
            "comment" => "required|max:500|min:5",
        ];
    }

    public function messages()
    {
        return [
            "comment.required" => "Bu alan gerekli",
            "comment.max" => "En fazla :max karakter olabilir",
            "comment.min" => "En az :min karakter olmalıdır",


        ];
    }
}
