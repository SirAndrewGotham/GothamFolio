<?php

namespace App\Http\Requests;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;

class UpdateImageRequest extends FormRequest
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
            'year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'camera_model' => 'nullable|string|max:255',
            'camera_settings' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
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
            $titleArray = $this->title ?? [];
            $mainTitle = !empty($titleArray) ? reset($titleArray) : 'Untitled Image';
        }

        if ($defaultLanguage && isset($this->description[$defaultLanguage->code])) {
            $mainDescription = $this->description[$defaultLanguage->code];
        } else {
            // Fallback: use the first available description or null
            $descriptionArray = $this->description ?? [];
            $mainDescription = !empty($descriptionArray) ? reset($descriptionArray) : null;
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
}
