<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVaccinationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:50',
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Il nome della vaccinazione è obbligatorio',
            'nome.max' => 'Il nome della vaccinazione deve avere massimo :max caratteri',
        ];
    }
}
