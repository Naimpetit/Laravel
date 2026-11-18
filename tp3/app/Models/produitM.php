<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produitM extends Model
{
 protected $table = 'produit';

 protected $primaryKey = 'idProduit';  

 protected $fillable=['libelleProduit','prixProduit'];
 public $timestamps = false;

 public function sescommandes()
 {
 return $this->belongsToMany(commandeM::class,'commande_produit','idProduit','idCommande')->withPivot('quantite');
 }
}
