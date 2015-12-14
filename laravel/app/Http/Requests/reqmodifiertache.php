<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Tache;
use Auth;

class reqmodifiertache extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //verifier si la tache exist
        if ($tacheencours= Tache::find($this->idtacheprincipal)){

            //verifier si l'utilisateur est bien celui qui est loggué
            if (Auth::user()->id == $tacheencours-> idutilisateur ){
                return true;
            }

        }
        return false;
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
            'descritacheprincipal'=> 'required|max:500',
        ];
    }
}
