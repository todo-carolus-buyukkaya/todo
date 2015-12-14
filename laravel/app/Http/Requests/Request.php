<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    public function forbiddenResponse()
    {
        return redirect()->back()->withErrors('Vous n\'etes pas autorisé');
    }

}
