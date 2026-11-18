<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alimentM extends Model
{
 protected $table = 'aliment';

 protected $primaryKey = 'idAl';  

 protected $fillable=['libelleAl','stockAl'];
 public $timestamps = false;

 public function sessaisons()
 {
 return $this->belongsToMany(saisonM::class,'aliment_saison','idAl','idSais')->withPivot('prix');
 }

}
