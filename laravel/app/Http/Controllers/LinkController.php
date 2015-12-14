<?php

namespace App\Http\Controllers;

use App\Soustache;
use App\Tache;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class LinkController extends Controller
{

    public function __construct()
    {
        $this->middleware('iplogger');
        //$this->middleware('guest', ['except' => 'getLogout']);
    }

    public  function listtaches(Request $req)
{
    //recuperer les taches dans la db par utilisateur
    $taches=\App\Tache::where('idutilisateur', $req->user()->id)->get();;
    return view('link/listtaches')->with('taches',$taches);
}
    public  function ajouttache(Requests\reqcreertache $req)
    {
        $param=$req->all();

        //verif voir Requests\reqcreertache
        //Stocker dans la bdd
        $tache=new \App\Tache();
        $tache->nom= $param['inputtacheprincipal'];
        $tache->idutilisateur= Auth::user()->id;
        $tache->description= $param['descriptionprincipal'];
        $tache->save();
        //Redirection vers accueil
       return redirect()->route('listtaches')->with('status','OK, c\'est enregistré');
    }
    public function  apropos (Request $req)
    {
        return view ('apropos');
    }
    public  function modiftache(Requests\reqmodifiertache $req)
    {
        $param=$req->all();
        //verif voir Requests\reqmodifiersoustache
        //Stocker dans la bdd
        $tache=new \App\Tache();
        $tache=$tache::find($param['idtacheprincipal']);
        $tache->nom= $param['inputtacheprincipal'];
        $tache->description= $param['descritacheprincipal'];
        $tache->save();
        //Redirection vers accueil
        return redirect()->route('listtaches')->with('status','OK, c\'est modifier');
    }

    public  function supprimertache(Requests\reqsupprimertache $req)
    {
        $param=$req->all();
        //verif voir Requests\reqsupprimertache
        //Stocker dans la bdd
        $tache=Tache::find($param['id']);
        $tache->delete();
        //Redirection vers accueil
        return redirect()->route('listtaches')->with('status','OK, c\'est modifier');
    }
    public  function ajoutsoustache(Requests\reqcreersoustache $req)
    {
        $param=$req->all();
        //verif voir Requests\reqcreersoustache
        //Stocker dans la bdd
        $stache=new \App\Soustache();
        $stache->soustaches= $param['nomsoustache'];
        $stache->date= $param['date'];
        $stache->idtache= $param['id'];
        $stache->save();
        //Redirection vers accueil
       return redirect()->route('listtaches')->with('status','OK, c\'est enregistré');
    }

    public  function modifsoustache(Requests\reqmodifiersoustache $req)
    {
        $param=$req->all();
        //verif voir Requests\reqmodifiersoustache
        var_dump($param);
        //Stocker dans la bdd
        $stache=new \App\Soustache();
        $stache=$stache::find($param['idsoustache']);
        $stache->soustaches= $param['nommodifsoustache'];
        $stache->date= $param['datemodsoustache'];
        $stache->save();
        //Redirection vers accueil
        return redirect()->route('listtaches')->with('status','OK, c\'est modifier');
    }
    public  function supprimersoustache(Requests\reqsupprimersoustache $req)
    {
        $param=$req->all();
        //verif voir Requests\reqsupprimersoustache
        //Stocker dans la bdd
        $sttache=Soustache::find($param['idsoustachesupp']);
        $sttache->delete();
        //Redirection vers accueil
        return redirect()->route('listtaches')->with('status','OK, c\'est modifier');
    }
    public  function valideroustache(Requests\reqvalidersoustache $req)
    {
        $param=$req->all();
        //verif voir Requests\reqvalidersoustache
        //Stocker dans la bdd
        $stache=new \App\Soustache();
        $stache=$stache::find($param['idsoustache']);
        $stache->etat= 1;
        $stache->save();
        //Redirection vers accueil
        return redirect()->route('listtaches')->with('status','OK, c\'est modifier');
    }
    public  function validertache(Requests\reqvalidertache $req)
    {
        $param=$req->all();
        //verif voir Requests\reqvalidertache
        //Stocker dans la bdd
        $tache=new \App\Tache();
        $tache=$tache::find($param['idtache']);
            // toute les sous tache passe a 1
        foreach ($tache->soustaches as $soustache){
            $soustache->etat=1;
            $soustache->save();
        }
        $tache->etat= 1;
        $tache->save();
        //Redirection vers accueil
        return redirect()->route('listtaches')->with('status','OK, c\'est modifier');
    }

}
