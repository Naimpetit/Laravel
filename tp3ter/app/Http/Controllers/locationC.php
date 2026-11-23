<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\clientM;
use App\Models\locationM;
use App\Models\MateriauxM;

class locationC extends Controller
{
    public function index()
    {
        $enregAll = locationM::all();
        return view('indexV', ['enregAll' => $enregAll]);  
    }

    public function cboLocation()
    {
        $enregAll = locationM::all();
        return view('cbolocationV', ['enregAll' => $enregAll]);    
    }

    public function ajoutmateriaux(request $request)
    {
        $loc = locationM::where('idClient', $request->cbolocation)->first();
        return view('ajoutmateriauxV', ['Enreg' => $loc]);    
    }

}
