<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EtablissmentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recherche',function () {
    return view('index');
});

Route::get('/add-directive', function() {
    return view('');
});

Route::get('/departement',[DepartementController::class , 'index'])->name('departement');

Route::get('/departement/{region}/{departement}',[DepartementController::class , 'show'])->name('departement.show');

Route::get('/departement/{name}',[DepartementController::class , 'show_name'])->name('departement.show_name');

Route::get('/etablissement',[EtablissmentController::class , 'index'])->name('etablissement');

Route::get('/etablissement/{etablissement}',[EtablissmentController::class , 'show'])->name('etablissement.show');


