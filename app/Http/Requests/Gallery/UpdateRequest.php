<?php

namespace App\Http\Requests\Gallery;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $gallery = $this->gallery;

        $rules = [
            'name' => 'required|max:255|unique:galleries,name,'.$gallery->id.',id,deleted_at,NULL',
            'description' => 'required'
        ];

        if ($gallery->type == 'Videos') {
            $rules['videos.*'] = 'sometimes|required|youtube';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'videos.*.required' => 'El link es obligatorio.'
        ];
    }
}
