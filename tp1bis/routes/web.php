<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\magasinC;

Route::get('/', [magasinC::class, 'index']);
Route::get('/consulter', [magasinC::class, 'all'])->name('consulter');
Route::get('/ajouter', [magasinC::class, 'newp']);  
Route::post('/ajoutersave', [magasinC::class, 'newsave']);      
Route::get('/consulterVille', [magasinC::class, 'allville']);
Route::post('consulterMag', [magasinC::class, 'allMag']);
