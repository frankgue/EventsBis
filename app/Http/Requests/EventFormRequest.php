<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required|min:5'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Vous devez renseigner un titre.',
            'title.min' => 'Vous devez entre un renseigner d\'au moins :min caractères',
            'description.required' => 'Vous devez renseigner une description.',
            'description.min' => 'Vous devez renseigner une description d\'au moins :min caractères',
        ];
    }
}
