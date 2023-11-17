<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id'=> 'nullable|integer',
            'name' => 'nullable|string',
            'age_from' => 'nullable|integer',
            'age_to' => 'nullable|integer',
            'city' => 'nullable|string',
            'country' => 'nullable|string',
            'is_married' => 'nullable|boolean',
            'surname_id' => 'nullable|integer|exists:surnames,id',
            'page' => 'nullable|integer',
            'per_page' => 'nullable|integer',


        ];
    }
}
