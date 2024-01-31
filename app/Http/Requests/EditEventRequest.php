<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEventRequest extends FormRequest
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
            'name'=>'required|max:15',
            'description'=>'required',
            'location'=>'required',
            'date'=>'required|date',
            'hour'=>'required|date_format:H:i',
            'type'=>'required|in:official, exhibition,charity',
            'tags'=>'required',
        ];
    }


    public function messages(){
        return[
            'name.required'=>'El nombre es obligatorio.',
            'name.max'=>'El nombre no puede exceder los 15 caracteres.',

            'description.required'=>'La descripción es obligatoria.',

            'location.required'=>'La localicación es obligatoria.',

            'date.required'=>'La fecha es obligatoria.',
            'date.date'=>'La fecha debe ser una fecha válida.',

            'hour.required'=>'La hora es obligatoria.',
            'hour.date_format'=>'La hora debe tener el formato H:i.',

            'type.required'=>'El campo tipo es obligatorio.',
            'type.in'=>'Se debe seleccionar uno de los valores.',

            'tags.required'=>'Tags es obligatorio.',

        ];
    }
}
