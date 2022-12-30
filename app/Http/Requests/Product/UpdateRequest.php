<?php

namespace App\Http\Requests\Product;

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
            'model' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable',
            'price' => 'required|integer',
            'old_price' => 'required|integer',
            'count' => 'required|integer',
            'category_id' => 'nullable',
            'group_id' => 'nullable',
            'colors' => 'nullable',
            'tags' => 'nullable',
            'add_images' => 'nullable|array',
            'addition_image_file_path' => 'nullable|array',

        ];
    }
}
