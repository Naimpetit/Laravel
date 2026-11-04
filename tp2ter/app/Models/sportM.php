<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sportM extends Model
{
   protected $table = 'sport';

    protected $primaryKey = 'idSport';  

    protected $fillable=['idSport','libelleSport'];
    public $timestamps = false;
}
