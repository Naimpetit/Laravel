<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\clientM;
use App\Models\contratM;


class contratC extends Controller
{
    public function index()
    {
        return view('indexV',['enregAll'=>contratM::all()]);  
    }

    public function newp()
    {
    $enregAll = clientM::select('idClient','nomClient')->distinct()->get(); 
    return view('ajoutContratV',['enregAll'=>$enregAll]);
    }
    
    public function newsave(Request $request)
    {
    $data = new contratM();

    $data->montantContrat = $request->txtPrix;

    $type = clientM::where('idClient', $request->cboclient)->first();

    $data->sonClient()->associate($type);

    $data->save();

    return redirect()->route('index');
    }

    public function delcont()
    {
        return view('contratdelV',['enregAll'=>contratM::all()]);
    }

    public function delcontsave(int $id) // $id contient idAl de l'aliment à supprimer
    {
    $uneligne = contratM::where('idContrat', $id)->first();
    $uneligne->delete();

    return redirect()->route('index');    
    }

}
