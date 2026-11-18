<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class saisonM extends Model
{
  protected $table = 'saison';

  protected $primaryKey = 'idSais';  

  protected $fillable=['libelleSais'];

  public $timestamps = false;

  public function sesaliments()
  {
	return $this->belongsToMany(alimentM::class,'aliment_saison','idSais','idAl')->withPivot('prix');
  }

}
