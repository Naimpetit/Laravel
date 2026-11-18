<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\commandeM;
use App\Models\produitM;

class commandeC extends Controller
{
    public function index()
    {
        return view('indexV');  
    }


    public function all()
    {
        $enregAll = commandeM::all();
        return view('commandeallV', ['enregAll' => $enregAll]);    
    }

    public function cbo()
    {
        $enregAll = commandeM::all();
        return view('cboV', ['enregAll' => $enregAll]);    
    }

    public function detailc(Request $request)
    {
        $lac= commandeM::where('idCommande', $request->cboCommande)->first();
        return view('commandeoneV',['lac'=>$lac]);
    }

    public function cboajout()
    {
        $enregAll = commandeM::all();
        return view('cboajoutcommandeV', ['enregAll' => $enregAll]);    
    }


    public function listepdtnewp(Request $request)
    {
        $lac = commandeM::where('idCommande', $request->cboCommande)->first();

        // AI PASSSE DES JOURS A TROUVER CETTE SOLUTION !!!!!

        // Récupération de tous les produits déjà présents dans la commande
        $lesproduitscommandes = $lac->sesproduits;

        // Création d'un tableau contenant uniquement les idproduit des produits déjà présents dans la commande
        // The pluck method retrieves all of the values for a given key
        // [valeuridProduit,valeuridProduit, valeuridProduit, ... ] 
        $filtrelesproduitscommandesId = $lesproduitscommandes->pluck('idProduit')->toArray();

        // Récupération de tous les produits à commander qui ne sont pas déjà présents dans la commande
        // whereNotInStrict : This method has the same signature as the whereNotIn method; however, all values are compared using "strict" comparisons.
        $lesproduitsacommander=produitM::all()->whereNotInStrict('idProduit', $filtrelesproduitscommandesId);

        return view('commandeajoutpV',['lac'=>$lac,'lesproduits'=>$lesproduitsacommander]);
    }

    public function ajoutlep(Request $request)
    {
        $lac = commandeM::where('idCommande', $request->lac)->first();
        $lep = produitM::where('idProduit', $request->cboProduit)->first();

        $lac->sesproduits()->attach($lep->idProduit,['quantite' => $request->txtquantite]);

        return redirect()->route('consulter');     
    }

    public function delproduit($idC, $idP) // $idC contient l'id de la commande & $idP le produit à supprimer
    {
        $lac = commandeM::where('idCommande', $idC)->first();
        $lep = produitM::where('idProduit', $idP)->first();
        
        $lac->sesproduits()->detach($lep->idProduit);

        return redirect()->route('consulter');     
    }


}
