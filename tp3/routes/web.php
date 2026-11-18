<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\commandeC;

Route::get('/', [commandeC::class, 'index']);
Route::get('/consultertout', [commandeC::class,'all'])->name('consulter');
Route::get('/consulterune', [commandeC::class,'cbo']);
Route::post('/lacchoisie', [commandeC::class,'detailc']);

Route::get('/ajoutcbo', [commandeC::class,'cboajout']);
Route::post('/lacchoisinewpd', [commandeC::class,'listepdtnewp']);

Route::post('/lepchoisi', [commandeC::class, 'ajoutlep']);
Route::get('/produitasupprimer/{idC}/{idP}', [commandeC::class, 'delproduit']);





















?>
