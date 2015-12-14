<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;
use App\Tache;
use App\Soustache;

class reqsupprimersoustache extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //verifier si la soustache exist
        if($soustacheencours= Soustache::find($this->idsoustachesupp))
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
        return[];
    }
}
