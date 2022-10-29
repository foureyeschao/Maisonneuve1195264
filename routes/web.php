<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etudiants', [EtudiantController::class , 'index'])->name('index');
Route::post('/store', [EtudiantController::class , 'store'])->name('store');
Route::get('/etudiants/{etudiant}', [EtudiantController::class , 'show'])->name('show');
Route::get('/etudiant-edit/{etudiant}', [EtudiantController::class , 'edit'])->name('edit');
Route::get('/etudiant-create', [EtudiantController::class , 'create'])->name('create');
Route::put('/etudiant-edit/{etudiant}', [EtudiantController::class , 'update'])->name('update');
Route::delete('/delete/{etudiant}', [EtudiantController::class , 'destroy'])->name('delete');

