<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGalleryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'title:en' => 'required|string|max:255',
            'title:eo' => 'required|string|max:255',
            'title:ru' => 'required|string|max:255',
            'description' => 'nullable|string',
            'description:en' => 'nullable|string',
            'description:eo' => 'nullable|string',
            'description:ru' => 'nullable|string',
            'cover_image' => 'nullable|string|max:255',
            'year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
            'order' => 'nullable|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The gallery title is required.',
            'title.max' => 'The gallery title may not be longer than 255 characters.',
            'year.min' => 'The year must be at least 1900.',
            'year.max' => 'The year cannot be in the future.',
        ];
    }
}
