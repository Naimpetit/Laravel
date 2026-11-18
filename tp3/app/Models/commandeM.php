<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class commandeM extends Model
{
  protected $table = 'commande';

  protected $primaryKey = 'idCommande';  

  protected $fillable=['dateCommande','nomClient'];

  public $timestamps = false;

  public function sesproduits()
  {
// 2nd param : Nom de la table pivot => il est possible de personnaliser le nom de la table
// pivot
// 3ème param : Nom de la CE dans la table pivot en rapport avec le CP de la table commande
// 4ème param : Nom de la 2nde clé étrangère de la table pivot qui permettra de faire le lien
// avec la table produit
// If your pivot table contains extra attributes, you must specify them when defining 
// the relationship
return $this->belongsToMany(produitM::class,'commande_produit','idCommande','idProduit')->withPivot('quantite');
  }
}
