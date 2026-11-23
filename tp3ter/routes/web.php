<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\locationC;

Route::get('/', [locationC::class, 'index']);

Route::get('/ajouter', [locationC::class, 'cboLocation']);

Route::post('/ajoutmateriaux', [locationC::class, 'ajoutmateriaux']);













?>
