<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\saisonC;

Route::get('/', [saisonC::class, 'index']);
Route::get('/list', [saisonC::class, 'listesaison']);
Route::get('/detailSaison/{id}', [saisonC::class, 'detailSaison']);  



















?>
