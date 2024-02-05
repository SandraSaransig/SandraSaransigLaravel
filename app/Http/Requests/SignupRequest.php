<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class SignupRequest extends FormRequest
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
            'username'=>['required', 'min:5', 'max:20', 'unique:users'],
            'name'=>['required', 'min:5','max:255'],
            'email'=>['required', 'min:10', 'max:255', 'unique:users'],
            'birthday'=>['required', 'date'],
            'password'=>['required','confirmed', Rules\Password::defaults()],

        ];
    }

    public function messages(){
        return[
            'username.required'=>'El nombre de usuario es obligatorio.',
            'username.min'=>'El nombre de usuario debe tener como mínimo 5 caracteres.',
            'username.max'=>'El nombre de usuario debe rener como máximo 20 caracteres.',
            'username.unique'=>'El nombre de usuario ya existe en el sistema.',

            'name.required'=>'El nombre completo es obligatorio.',
            'name.min'=>'El nombre completo debe tener como mínimo 5 caracteres.',
            'name.max'=>'El nomnbre completo debe tener como máximo 255 caracteres.',

            'email.required'=>'El email es obligatorio.',
            'email.unique'=>'El email ya esxite en el sistema.',
            'email.min'=>'El email debe tener como mínimo 10 caracteres.',
            'email.max'=>'El email debe tener como maximo 255 caracteres.',

            'birthday.required'=>'La fecha de nacimiento es obligatoria.',
            'birthday.date'=>'Ingrese una fecha de nacimiento valida.',

            'password.required'=>'La contraseña es obligatoria.',
            'password.confirmed'=>'Las contraseñas no coinciden.',
            'password.min'=>'La contraseña debe tener como mínimo 8 caracteres.',
        ];
    }
}
