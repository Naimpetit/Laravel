<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\alimentM;
use App\Models\saisonM;

class saisonC extends Controller
{
    public function index()
    {
        return view('indexV');  
    }

    public function listesaison()
    {
        $enregAll = saisonM::all();
        return view('listesaisonV', ['enregAll' => $enregAll]);    
    }

        public function detailSaison(int $id) // $id contient idSaison de la saison à afficher
    {
        $enregall = saisonM::where('idSais', $id)->first();

        return view('saisonDetailV', ['enregall' => $enregall]);    
    }

}
