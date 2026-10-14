<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\alimentM;
use App\Models\typeM;

class alimentC extends Controller
{
    public function index()
    {
        return view('indexV');  
    }

    public function all()
    {
    $enregAll = alimentM::all();

    return view('alimentallV',['enregAll'=>$enregAll]);
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

    public function delal()
    {

    $enregAll = alimentM::all();
     
    return view('alimentdelV',['enregAll'=>$enregAll]);
    }

    public function delalsave(int $id) // $id contient idAl de l'aliment à supprimer
    {
    $uneligne = alimentM::where('idAl', $id)->first();
    $uneligne->delete();

    return redirect()->route('consulter');    
    }

}
