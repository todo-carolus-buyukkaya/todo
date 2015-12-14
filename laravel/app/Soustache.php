<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soustache extends Model
{
    protected  $fillable=['soustaches','date','etat','idtache'];

    public function taches()
    {
        return $this->belongsTo('App\Tache');
    }
}
