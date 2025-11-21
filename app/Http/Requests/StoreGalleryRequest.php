<?php

namespace App\Http\Requests;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;

class StoreGalleryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'main_title' => 'required|string|max:255',
            'main_description' => 'nullable|string',
            'cover_image' => 'nullable|sometimes|string|max:255',
            'cover_image_file' => 'nullable|sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5120', // Added file validation
            'year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
            'order' => 'nullable|integer',
        ];

        // Add dynamic rules for each active language
        $activeLanguages = Language::active()->pluck('code');

        foreach ($activeLanguages as $languageCode) {
            $rules["title.{$languageCode}"] = 'required|string|max:255';
            $rules["description.{$languageCode}"] = 'nullable|string';
        }

        return $rules;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        // Extract the main title and description from translation data
        $defaultLanguage = Language::default()->first() ?? Language::active()->first();

        $mainTitle = null;
        $mainDescription = null;

        if ($defaultLanguage && isset($this->title[$defaultLanguage->code])) {
            $mainTitle = $this->title[$defaultLanguage->code];
        } else {
            // Fallback: use the first available title
            $mainTitle = !empty($this->title) ? reset($this->title) : 'Untitled Gallery';
        }

        if ($defaultLanguage && isset($this->description[$defaultLanguage->code])) {
            $mainDescription = $this->description[$defaultLanguage->code];
        } else {
            // Fallback: use the first available description or null
            $mainDescription = !empty($this->description) ? reset($this->description) : null;
        }

        // Merge the prepared values without affecting the original translation arrays
        $this->merge([
            'main_title' => $mainTitle,
            'main_description' => $mainDescription,
            // Keep the original title and description arrays for translation validation
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }

    public function messages()
    {
        return [
            'main_title.required' => 'The gallery title is required.',
            'main_title.max' => 'The gallery title may not be longer than 255 characters.',
            'year.min' => 'The year must be at least 1900.',
            'year.max' => 'The year cannot be in the future.',
        ];
    }
}
