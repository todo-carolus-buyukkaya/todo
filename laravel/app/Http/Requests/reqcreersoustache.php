<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;
use App\Tache;
use App\Soustache;
class reqcreersoustache extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
            //verifier que la tache exist
            if ($tacheencours=Tache::find($this->id))
            {
                //verifier que la soustache appartient bien a l'utilisateur logué
               if (Auth::user()->id == $tacheencours-> idutilisateur )
                {
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
            'nomsoustache' => 'required|max:255',
            'date'=> 'required|date_format:Y-m-d',
            'etat' => 'integer|between:0,1',
        ];
    }
}
