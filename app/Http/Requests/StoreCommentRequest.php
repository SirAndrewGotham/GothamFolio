<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    /**
     * Determine whether the current user is authorized to make this request.
     *
     * @return bool `true` if the user is authorized to make the request, `false` otherwise.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Provide validation rules for the request input.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string> An associative array mapping field names to their validation rules.
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}