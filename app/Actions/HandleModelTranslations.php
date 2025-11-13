<?php

namespace App\Actions;

use Illuminate\Database\Eloquent\Model;

class HandleModelTranslations
{
    public function __invoke(Model $model, array $validatedData, array $translatableAttributes)
    {
        // Update the model with non-translatable attributes
        $nonTranslatable = array_diff_key($validatedData, array_flip($translatableAttributes));
        $model->fill($nonTranslatable)->save();

        // Handle translations for each translatable attribute
        foreach ($translatableAttributes as $attribute) {
            if (isset($validatedData[$attribute]) && is_array($validatedData[$attribute])) {
                foreach ($validatedData[$attribute] as $locale => $value) {
                    if (!empty($value)) {
                        $model->setTranslation($attribute, $value, $locale);
                    }
                }
            }
        }

        return $model;
    }
}
