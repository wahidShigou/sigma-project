<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormationController;
use App\Http\Controllers\DevenirFormateurController;

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

Route::get('/', [FormationController::class, 'index'])->name('home');
Route::get('/accueil', [FormationController::class, 'index'])->name('home');
Route::get('/formateur/signup', [DevenirFormateurController::class, 'index'])->name('formateur.signup');
Route::get('/formation/details/{formation}', [FormationController::class, 'show'])->name('formation.show');
Route::post('/formateur/add', [DevenirFormateurController::class, 'store'])->name('formateur.store');
