<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'name:en' => 'required|string|max:255',
            'name:eo' => 'required|string|max:255',
            'name:ru' => 'required|string|max:255',
            'description' => 'nullable|string',
            'description:en' => 'nullable|string',
            'description:eo' => 'nullable|string',
            'description:ru' => 'nullable|string',
            'cover' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ];
    }
}
