<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class typeM extends Model
{
   protected $table = 'type';

    protected $primaryKey = 'idType';  

    protected $fillable=['idType','libelleType'];
    public $timestamps = false;
}
