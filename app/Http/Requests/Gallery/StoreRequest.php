<?php

namespace App\Http\Requests\Gallery;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255|unique:galleries,name,NULL,id,deleted_at,NULL',
            'description' => 'required',
            'type' => 'required',
            'images' => 'required_if:type,Fotos',
            'videos.*' => 'required_if:type,Videos|youtube'
        ];
    }

    public function messages()
    {
        return [
            'images.required_if' => 'El campo imágenes es obligatorio.',
            'videos.*.required_if' => 'El link es obligatorio.'
        ];
    }
}
