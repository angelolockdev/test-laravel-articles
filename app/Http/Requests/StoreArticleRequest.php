<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titre'            => 'required|string|max: 255',
            'slug'             => 'required|string|max: 255|unique: articles,slug',
            'contenu'          => 'required|string',
            'auteur'           => 'required|string|max: 255',
            'date_publication' => 'nullable|date',
        ];
    }
}
