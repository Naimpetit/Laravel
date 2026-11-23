<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriauxM extends Model
{
  protected $table = 'materiaux';

  protected $primaryKey = 'idMateriaux';  

  protected $fillable=['idMateriaux','libelleMateriaux'];

  public $timestamps = false;

  public function sesLocations()
  {
	return $this->belongsToMany(LocationM::class,'location_materiaux','idMateriaux','idLocation');
  }
}

