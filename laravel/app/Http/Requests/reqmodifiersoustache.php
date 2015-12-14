<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Soustache;
use App\Tache;
use Auth;

class reqmodifiersoustache extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //verifier si la soustache exist
        if($soustacheencours= Soustache::find($this->idsoustache))
        {
            //verifier que la tache exist
            if ($tacheencours= Tache::find($soustacheencours->idtache))
            {
                //verifier que la tche appartient bien a l'utilisateur logué
                if (Auth::user()->id == $tacheencours-> idutilisateur )
                {
                    return true;
                }
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
                'nommodifsoustache' => 'required|max:255',
                'datemodsoustache'=> 'required|date_format:Y-m-d',
                'etat' => 'integer|between:0,1',
        ];
    }
}
