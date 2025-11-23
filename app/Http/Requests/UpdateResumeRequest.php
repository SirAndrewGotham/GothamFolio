<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateResumeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => 'required|string|in:experience,education,skill',
            'icon' => 'nullable|string|max:50',
            'duration' => 'nullable|string|max:100',
            'percentage' => 'nullable|integer|min:0|max:100',
            'link' => 'nullable|url|max:255',
            'order' => 'integer',
            'is_active' => 'boolean',
            'title' => 'required|array',
            'title.*' => 'required|string|max:255',
            'subtitle' => 'nullable|array',
            'subtitle.*' => 'nullable|string|max:255',
            'description' => 'nullable|array',
            'description.*' => 'nullable|string',
        ];
    }
}
