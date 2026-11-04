<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\joueurM;
use App\Models\sportM;

class joueurC extends Controller
{
    public function index()
    {
        $enregAll = joueurM::all();

        return view('indexV',['enregAll'=>$enregAll]);  
    }


    public function detailSport(int $id) // $id contient idSport du sport à afficher
    {
        $uneligne = joueurM::where('idJoueur', $id)->first();;

        return view('sportJoueurV', ['uneligne' => $uneligne]);    
    }


    public function allsport()
    {
        $enregAll = sportM::all();
        
        return view('formSportV',['enregAll'=>$enregAll]);
    }


    public function sportJoueur(request $request)
    {
        $enregAll = joueurM::where('idSport', request('cbosport'))->get();

        return view('allJoueurSportV',['enregAll'=>$enregAll]);
    }





    public function newp()
    {
    $enregAll = typeM::select('libelleType','idType')->distinct()->get(); 
    return view('formnewallV',['enregAll'=>$enregAll]);
    //  Appel vue contenant un formulaire de création d'un produit
    }
    
    public function newsave(Request $request)
    {
    $data = new alimentM();

    $data->libelleAl = $request->txtLib;
    $data->prixAl = $request->txtPrix;

    $type = typeM::where('idType', $request->cbotype)->first();

    $data->sontype()->associate($type);

    $data->save();

    return redirect()->route('consulter');
    }

    

    

}
