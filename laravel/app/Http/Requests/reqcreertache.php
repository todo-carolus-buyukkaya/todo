<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class reqcreertache extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //comme on  ne passe pas d'id utilisateur
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

                'inputtacheprincipal' => 'required|max:255',
                 'descriptionprincipal'=> 'required|max:500'

        ];
    }
    public function messages(){
        return[
            'inputtacheprincipal.required'=> 'Veuillez indiquez le nom d\'une tache',
            'inputtacheprincipal.max'=> '(:max caractères maximum)'
        ];

    }
}
