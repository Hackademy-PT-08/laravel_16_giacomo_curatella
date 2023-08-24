<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//! ROTTA HOME->HOMEPAGE
Route::get('/', [HomeController::class, 'index'])->name('home');

//! ROTTE ARTICLES
Route::get('/articoli/aggiungi', [ArticleController::class, 'create'])->name('articoli-aggiungi');

Route::get('/articoli/modifica/{id}', [ArticleController::class, 'edit'])->name('articoli-modifica');


