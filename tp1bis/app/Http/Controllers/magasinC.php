<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\magasinM;

class magasinC extends Controller
{
    public function index()
    {
        return view('indexV');
    }

    public function all()
    {
    $enregAll = magasinM::all();
                
    $enregCount = magasinM::all()->count();

    return view('magasinallV',['enregAll'=>$enregAll,'enregCount'=>$enregCount]);
    }

    public function newp()
    {
    return view('formnewmagasinC');
    }

    public function newsave(Request $request)
    {
    $data = new magasinM();

    $data->nomMag = $request->txtNom;
    $data->villeMag = $request->txtVille;

    $data->save();

    return redirect()->route('consulter');
    }

    public function allVille()
    {
    $enregAll = magasinM::select('villeMag')->distinct()->get();        
    return view('formlistevilleV',['enregAll'=>$enregAll]);
    }

    public function allMag(Request $request)
    {
    $enregAll = magasinM::where('villeMag',$request->cboVille)->get();
    return view('magasinvilleV',['enregAll'=>$enregAll, 'nomVille'=>$request->cboVille]);
    }



}
