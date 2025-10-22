<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool `true` if the user is authorized, `false` otherwise.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Validation rules for updating a comment.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string> Map of field names to their validation rules.
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}