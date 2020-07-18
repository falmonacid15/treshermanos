<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|max:255|unique:products,name,NULL,id,deleted_at,NULL',
            'description' => 'required',
            'image_path' => 'required|mimes:jpg,png,jpeg',
            'outstanding' => 'required',
            'product_type_id' => 'required'
        ];
    }
}
