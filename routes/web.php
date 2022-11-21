<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ForumArticleController;
use App\Http\Controllers\CustomAuthController;

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
Route::get('/student', [EtudiantController::class , 'index'])->name('student.index')->middleware('auth');
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/login', [CustomAuthController::class, 'authentication'])->name('login.authentication');
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('/registration', [CustomAuthController::class, 'create'])->name('user.registration');
Route::post('/registration-store', [CustomAuthController::class, 'store'])->name('user.store');

Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

Route::post('/store', [EtudiantController::class , 'store'])->name('store');

Route::get('/forum', [ForumArticleController::class , 'index'])->name('forum.index')->middleware('auth');
Route::get('/forum/article-create', [ForumArticleController::class, 'create'])->name('article.create')->middleware('auth');
Route::post('/forum/article-create', [ForumArticleController::class, 'store'])->name('article.store');

Route::delete('/forum/article-edit/{forumArticle}', [ForumArticleController::class, 'destroy'])->name('article.destroy');

Route::get('/forum/article/{forumArticle}', [ForumArticleController::class, 'show'])->name('article.show')->middleware('auth');

Route::get('/etudiants/{etudiant}', [EtudiantController::class , 'show'])->name('show');
Route::get('/etudiant-edit/{etudiant}', [EtudiantController::class , 'edit'])->name('edit');
Route::get('/etudiant-create', [EtudiantController::class , 'create'])->name('create')->middleware('auth');;
Route::put('/etudiant-edit/{etudiant}', [EtudiantController::class , 'update'])->name('update');
Route::delete('/delete/{etudiant}', [EtudiantController::class , 'destroy'])->name('delete');

