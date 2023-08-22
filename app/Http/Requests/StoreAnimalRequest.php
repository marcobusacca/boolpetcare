<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
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
            'nome'=> 'required|max:50',
            'specie'=> 'required|max:50',
            'data_di_nascita'=> 'requiered',
            'genere'=>'required',
            'nome_proprietario'=> 'requiered',
            'cognome_proprietario'=> 'requiered',
        ];
    }

    public function messages(){
        return [
            'name.required'=> 'Questo animale deve avere un nome!',
            'name.max'=> 'Il nome di questo animale è troppo lungo! Meglio non superare i :max caratteri.',
            'specie.required'=> 'L\'animale deve appartenere ad una specie.',
            'specie.max'=> 'La specie di questo animale è troppo lunga! Meglio non superare i :max caratteri.',
            'data_di_nascita.required'=> 'Questo animale deve avere una data di nascita.',
            'genere.required'=>'L\'animale deve avere un sesso',
            'nome_proprietario.requiered'=> 'Il proprietario deve avere un nome',
            'cognome_proprietario.requiered'=> 'Il proprietario deve avere un cognome',
        ];
    }
    
}
