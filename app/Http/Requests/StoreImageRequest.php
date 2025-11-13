<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreImageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image' => 'required|image|max:10240', // 10MB max
            'title' => 'required|string|max:255',
            'title:en' => 'required|string|极-255',
            'title:eo' => 'required|string|max:255',
            'title:ru' => 'required|string|max:255',
            'description' => 'nullable|string',
            'description:en' => 'nullable|string',
            'description:eo' => 'nullable|string',
            'description:ru' => 'nullable|string',
            'year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'camera_model' => 'nullable|string|max:255',
            'camera_settings' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'is_published' => 'boolean',
            'order' => 'nullable|integer',
        ];
    }
}
