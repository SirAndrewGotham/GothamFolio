<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name.en' => 'required|string|max:255',
            'name.*' => 'nullable|string|max:255',
            'description.en' => 'nullable|string',
            'description.*' => 'nullable|string',
            'project_type_id' => 'required|exists:project_types,id',
            'year' => 'required|integer|min:2000|max:2030',
            'status' => 'required|in:Active,completed,in_progress,planned',
            'duration' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'demo_url' => 'nullable|url|max:255',
            'github_url' => 'nullable|url|max:255',
            'featured' => 'boolean',
            'is_active' => 'boolean',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
        ];
    }
}
