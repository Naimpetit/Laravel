<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fournisseurM extends Model
{
    protected $table = 'fournisseur';  // Nom de la table dans la bd

    protected $primaryKey = 'idFour';  // Nom de la CP. Obligatoire si différente de id

    protected $fillable=['nomFour','villeFour'];
// Liste des champs modifiables par l'application è obligatoire.

    public $timestamps = false; 
//By default, Eloquent expects created_at and updated_at columns to exist on your tables. If you do not wish to have these columns automatically managed by Eloquent, set the $timestamps property on your model to false.

}
