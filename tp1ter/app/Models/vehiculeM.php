<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehiculeM extends Model
{
    protected $table = 'vehicule';  

    protected $primaryKey = 'idVehic';  
    protected $fillable=['modeleVehic','energieVehic'];
    public $timestamps = false; 
}
