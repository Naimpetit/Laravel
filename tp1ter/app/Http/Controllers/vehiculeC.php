<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VehiculeM;

class vehiculeC extends Controller
{
    public function index()
    {
        return view('indexV');
    }

    public function all()
    {
    $enregAll = VehiculeM::all();
                
    $enregCount = VehiculeM::all()->count();

    return view('vehiculeallV',['enregAll'=>$enregAll,'enregCount'=>$enregCount]);
    }

    public function newp()
    {
    return view('formnewvehiculeC');
    }

    public function newsave(Request $request)
    {
    $data = new VehiculeM();

    $data->modeleVehic = $request->txtModele;
    $data->energieVehic = $request->txtEnergie;

    $data->save();

    return redirect()->route('consulter');
    }

    public function allVille()
    {
    $enregAll = VehiculeM::select('energieVehic')->distinct()->get();        
    return view('formlisteenergieV',['enregAll'=>$enregAll]);
    }

    public function allMag(Request $request)
    {
    $enregAll = VehiculeM::where('energieVehic',$request->cboEnergie)->get();
    return view('vehiculeEngV',['enregAll'=>$enregAll, 'modeleVehic'=>$request->cboEnergie]);
    }



}
