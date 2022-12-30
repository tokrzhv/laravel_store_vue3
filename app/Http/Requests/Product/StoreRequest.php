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
            'model' => 'required',
            'description' => 'required',
            'content' => 'required',
            'preview_image' => 'nullable|file',
            'price' => 'required|integer',
            'old_price' => 'required|integer',
            'count' => 'required|integer',
            'available' => 'nullable',
            'category_id' => 'nullable',
            'group_id' => 'nullable',
            'colors' => 'nullable|array',
            'tags' => 'nullable|array',
            'product_images' => 'nullable|array',
        ];
    }
}
