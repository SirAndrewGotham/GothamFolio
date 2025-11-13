<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreBannerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'image_path' => 'nullable|string|max:255',
            'button_link' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'order' => 'integer',
            'title' => 'required|array',
            'title.*' => 'required|string|max:255',
            'description' => 'nullable|array',
            'description.*' => 'nullable|string',
            'button_text' => 'nullable|array',
            'button_text.*' => 'nullable|string|max:100',
        ];
    }
}
