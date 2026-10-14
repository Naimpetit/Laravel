<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alimentM extends Model
{
    protected $table = 'aliment';

    protected $primaryKey = 'idAl';  

    protected $fillable=['libelleAl','prixAl', 'idType'];

    public $timestamps = false;

    public function sontype()
     {
	// Création d'une méthode pour assurer le lien entre un aliment 
// et son type
	// Nom du modèle du type. 2nd param : nom de la CE
    return $this->belongsTo('App\Models\typeM','idType');
    }
}
