<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\produitM;

class produitC extends Controller
{
    public function index()
    {
        return view('indexV');  
// Appel de la vue indexV, page d'accueil du site
    }

    public function all()
    {
    $enregAll = produitM::all();
                
    $enregCount = produitM::all()->count();

    return view('produitallV',['enregAll'=>$enregAll,'enregCount'=>$enregCount]);
    }

    public function newp()
    {
    return view('formnewproduitV');
    //  Appel vue contenant un formulaire de création d'un produit
    }


    public function newsave(Request $request)
    {
    $data = new produitM();

    $data->libellePdt = $request->txtLib;
    $data->prixPdt = $request->txtPrix;
    $data->stockPdt = $request->txtStock;

    $data->save();

    return redirect()->route('consulter');
    }
}
