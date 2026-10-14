<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vehiculeC;

Route::get('/', [vehiculeC::class, 'index']);
Route::get('/consulter', [vehiculeC::class, 'all'])->name('consulter');
Route::get('/ajouter', [vehiculeC::class, 'newp']);  
Route::post('/ajoutersave', [vehiculeC::class, 'newsave']);      
Route::get('/consulterEnergie', [vehiculeC::class, 'allville']);
Route::post('consulterEng', [vehiculeC::class, 'allMag']);
