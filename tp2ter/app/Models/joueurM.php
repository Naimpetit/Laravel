<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class joueurM extends Model
{
    protected $table = 'joueur';

    protected $primaryKey = 'idJoueur';  

    protected $fillable=['nomJoueur','idSport'];

    public $timestamps = false;

    public function sonsport()
     {
    return $this->belongsTo('App\Models\sportM','idSport');
    }
}
