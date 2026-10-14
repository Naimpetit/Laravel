<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class magasinM extends Model
{
    protected $table = 'magasin';  // Nom de la table dans la bd

    protected $primaryKey = 'idMag';  // Nom de la CP. Obligatoire si différente de id

    protected $fillable=['nomMag','villeMag'];
// Liste des champs modifiables par l'application è obligatoire.

    public $timestamps = false; 
//By default, Eloquent expects created_at and updated_at columns to exist on your tables. If you do not wish to have these columns automatically managed by Eloquent, set the $timestamps property on your model to false.

}
