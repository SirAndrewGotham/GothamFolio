<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateViewRequest extends FormRequest
{
    /**
     * Determine whether the current user is authorized to perform this request.
     *
     * @return bool `true` if the user is authorized, `false` otherwise.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Return the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string> Mapping of form field names to their validation rules. Each value may be a validation rule string, an array of rule strings, or an object implementing `ValidationRule`.
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}