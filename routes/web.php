<?php

use App\Http\Controllers\AcademyController;
use App\Http\Controllers\AmbassadeurController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EtablissmentController;
use App\Http\Controllers\InspectionController;
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

Route::get('/',function () {
    return view('index');
});

// departement routes

Route::get('/departement',[DepartementController::class , 'index'])->name('departement');

Route::get('/departement/{region}/{departement}',[DepartementController::class , 'show'])->name('departement.show');

Route::get('/departement/{name}',[DepartementController::class , 'show_name'])->name('departement.show_name');

// Route::get('/departement/edit/{name}',[DepartementController::class , 'edit'])->name('departement.edit');

// etablissement routes

Route::get('/etablissement',[EtablissmentController::class , 'index'])->name('etablissement');

Route::get('/etablissement/{etablissement}',[EtablissmentController::class , 'show'])->name('etablissement.show');

Route::get('/inspection',[InspectionController::class , 'index'])->name('inspection');


Route::get('/inspection/{region}/{section}/{specialisation}', [InspectionController::class, 'show'])->name('inspection.show');

Route::get('/inspection/{name}', [InspectionController::class, 'show_name'])->name('inspection.show_name');

// Ombasadeur routes

Route::get('/ambassadeur',[AmbassadeurController::class , 'index'])->name('ambassadeur');

Route::get('/ambassadeur/{Ambassadeur_region}',[AmbassadeurController::class , 'show'])->name('Ambassadeur.show');

// association routes

Route::get('/association',[AssociationController::class , 'index'])->name('association');

Route::get('/association/{name}',[AssociationController::class , 'show'])->name('association.show');

// Route of Academy

Route::get('/academy',[AcademyController::class , 'index'])->name('academy');

Route::get('/academy/{departement}',[AcademyController::class , 'show_name'])->name('academy.show');