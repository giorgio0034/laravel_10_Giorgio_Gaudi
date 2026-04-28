<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TraineeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;//Modifico questo booleano per utilizzare la request custom
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array

    {
        //Array chiave-valore
        //chiave:sarà il campo input da validare
        //valore:la regola che vuoi validare
        return [
            'name'=> 'required|min:3'//sto chiedendo di controllare il campo name che sia passato in maniera obbligatoria

        ];
    }
    //Override di un metodo per modificare i messaggi di errore
    public function messages(){

        //Array chiave-valore
        //chiave: nome del campo. la regola da validare
        //valore: il messaggio che appare se quella regola non è stata rispettata
        return[

        'name.required'=>'Non hai inserito il nome nel campo'

        ];
    }


}
