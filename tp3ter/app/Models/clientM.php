<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientM extends Model
{
   protected $table = 'client';

    protected $primaryKey = 'idClient';  

    protected $fillable=['idClient','nomClient','villeClient'];
    public $timestamps = false;
}