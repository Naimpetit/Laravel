<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class locationM extends Model
{
 protected $table = 'location';

 protected $primaryKey = 'idLocation';  

 protected $fillable=['idLocation','dureeLocation','idClient'];
 public $timestamps = false;

 public function sesMateriaux()
 {
 return $this->belongsToMany(materiauxM::class,'location_materiaux','idLocation','idMateriaux');
 }

 public function sonClient()
     {
	    return $this->belongsTo('App\Models\clientM','idClient');
	}
}


