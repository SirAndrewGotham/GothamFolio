<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:10240', // 10MB max
            'year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'camera_model' => 'nullable|string|max:100',
            'camera_settings' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'is_published' => 'boolean',
            'order' => 'nullable|integer',
        ];
    }
}
