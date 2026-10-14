<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\fournisseurM;

class fournisseurC extends Controller
{

    public function index()
    {
        $enregAll = fournisseurM::all();
               
        $enregCount = fournisseurM::all()->count();

        return view('indexV',['enregAll'=>$enregAll]);
    }

    public function newp()
    {
        return view('formnewfournisseurC');
    }

    public function newsave(Request $request)
    {
        $data = new fournisseurM();

        $data->nomFour = $request->txtNom;
        $data->villeFour = $request->txtVille;

        $data->save();

        return redirect()->route('consulter');
    }

    public function allVille()
    {
        $enregAll = fournisseurM::select('villeFour')->distinct()->get();        
        return view('formlistevilleV',['enregAll'=>$enregAll]);
    }

    public function allFour(Request $request)
    {
        $enregAll = fournisseurM::where('villeFour',$request->cboVille)->get();
        return view('fournisseurvilleV',['enregAll'=>$enregAll, 'nomVille'=>$request->cboVille]);
    }



}
