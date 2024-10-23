<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //en esta parte podremos dar autorizacion a un usuario determinado
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
            'name' => 'required|string|max:150|unique:categories,name,' . $this->category,
            'description' => 'nullable|string|max:600',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.unique' => 'El nombre ya está en uso.',
            'name.max' => 'El nombre sobre pasa los caracteres permitidos (150)',
            'description.max' => 'La descripción sobre pasa los caracteres permitidos (600).',
        ];
    }
}