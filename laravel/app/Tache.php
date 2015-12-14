<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected  $fillable=['nom','description','idutilisateur','etat'];

    public function soustaches()
    {
        return $this->hasMany('App\Soustache','idtache')->orderBy('etat');
    }
    public function user()
    {
        return $this->belongsTo('App\User','idutilisateur');
    }
}
