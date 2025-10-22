<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubscriptionRequest extends FormRequest
{
    /**
     * Determine whether the current user is authorized to perform the action represented by this request.
     *
     * @return bool `true` if the user is authorized to make the request, `false` otherwise.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Provide validation rules for the request's input data.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string> Mapping of field names to their validation rules.
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}