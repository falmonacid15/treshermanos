<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'image_path' => 'sometimes|mimes:jpg,png,jpeg',
            'title' => 'required|max:255|unique:sliders,title,'.$this->slider->id.',id,deleted_at,NULL',
            'description' => 'required'
        ];
    }
}
