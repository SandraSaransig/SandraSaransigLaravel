<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PlayerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
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
            //
            'name' => 'required|max:15',
            'twitter' => 'nullable|regex:/^[a-zA-Z0-9_]{1,15}$/',
            'instagram' => 'nullable|regex:/^[a-zA-Z0-9_.]{1,30}$/',
            'twitch' => 'nullable|regex:/^[a-zA-Z0-9_]{4,25}$/',
            'tshirt_number' => 'required|numeric',
            'position' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio.',
            'name.max' => 'El campo nombre no debe tener más de 15 caracteres.',

            'twitter.regex' => 'El nombre de usuario de Twitter debe contener hasta 15 caracteres alfanuméricos o guiones bajos.',

            'instagram.regex' => 'El nombre de usuario de Instagram debe contener hasta 30 caracteres alfanuméricos, guiones bajos y puntos.',

            'twitch.regex' => 'El nombre de usuario de Twitch debe contener entre 4 y 25 caracteres alfanuméricos o guiones bajos.',

            'tshirt_number.required' => 'El campo número de camiseta es obligatorio.',
            'tshirt_number.numeric' => 'El campo número de camiseta debe ser un valor numérico.',

            'position.required' => 'El campo posición es obligatorio.'
        ];
    }
}
