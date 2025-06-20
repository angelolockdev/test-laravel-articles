<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            'titre'            => 'sometimes|required|string|max          : 255',
            'slug'             => ['sometimes', 'required', 'string', 'max: 255', Rule::unique('articles')->ignore($this->article)],
            'contenu'          => 'sometimes|required|string',
            'auteur'           => 'sometimes|required|string|max          : 255',
            'date_publication' => 'nullable|date',
        ];
    }
}
