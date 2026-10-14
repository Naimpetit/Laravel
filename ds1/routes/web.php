<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fournisseurC;

Route::get('/', [fournisseurC::class, 'index'])->name('consulter');
Route::get('/ajouter', [fournisseurC::class, 'newp']);  
Route::post('/ajoutersave', [fournisseurC::class, 'newsave']);
Route::get('/consulterVille', [fournisseurC::class, 'allVille']);
Route::post('/consulterFour', [fournisseurC::class, 'allFour']);