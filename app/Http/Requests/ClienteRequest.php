<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
        'nombres' => 'required|string|max:255',
        'email' => 'required|email',
        'direccion' => 'required',
        'fono' => 'required',
        'foto' => $this->isMethod('post')
                    ? 'required|image|mimes:jpg,jpeg,png|max:2048'
                    : 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'El campo nombres es obligatorio.',
            'email.required' => 'El email es obligatorio.',
            'direccion.required' => 'La dirección es obligatoria.',
            'fono.required' => 'El teléfono es obligatorio.',
            'foto.required' => 'La imagen es requerida.',
            'foto.image' => 'El archivo debe ser una imagen.',
            'foto.mimes' => 'La imagen debe ser jpg, jpeg o png.'
        ];
    }
}
