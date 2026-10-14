<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\produitM;
use App\Models\categorieM;

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

    return view('produitallV',['enregAll'=>$enregAll]);
    }

    public function newp()
    {
    $enregAll = categorieM::select('libelleCat','idCat')->distinct()->get(); 
    return view('formnewproduitV',['enregAll'=>$enregAll]);
    //  Appel vue contenant un formulaire de création d'un produit
    }


    public function newsave(Request $request)
    {
    $data = new produitM();

    $data->libellePdt = $request->txtLib;
    $data->prixPdt = $request->txtPrix;
    $data->stockPdt = $request->txtStock;

    $categ = categorieM::where('idCat', $request->cbocat)->first();

    $data->sacateg()->associate($categ);

    $data->save();

    return redirect()->route('consulter');
    }
}
