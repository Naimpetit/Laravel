<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contratM extends Model
{
    protected $table = 'contrat';

    protected $primaryKey = 'idContrat';  

    protected $fillable=['montantContrat', 'idClient'];

    public $timestamps = false;

    public function sonClient()
     {
    return $this->belongsTo('App\Models\clientM','idClient');
    }
}
