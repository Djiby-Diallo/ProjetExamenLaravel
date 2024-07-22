<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\DashboardController;

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

// Routes pour  CategorieController
Route::prefix('categories')->group(function () {
    Route::get('/', [CategorieController::class, 'index'])->name('categorie.index');
    Route::get('/create', [CategorieController::class, 'create'])->name('categorie.create');
    Route::post('/store', [CategorieController::class, 'store'])->name('categorie.store');
    Route::get('/edit/{id}', [CategorieController::class, 'edite'])->name('categorie.edite');
    Route::put('/update/{id}', [CategorieController::class, 'update'])->name('categorie.update');
    Route::get('/supprimer/{id}', [CategorieController::class, 'supprimer'])->name('categorie.supprimer');

});

// Routes pour ProduitController
Route::prefix('produits')->group(function () {
    Route::get('/', [ProduitController::class, 'index'])->name('produit.index');
    Route::get('/create', [ProduitController::class, 'create'])->name('produit.create');
    Route::post('/store', [ProduitController::class, 'store'])->name('produit.store');
    Route::get('/edit/{id}', [ProduitController::class, 'edite'])->name('produit.edite');
    Route::put('/update/{id}', [ProduitController::class, 'update'])->name('produit.update');
    Route::get('/supprimer/{id}', [ProduitController::class, 'supprimer'])->name('produit.supprimer');
});

// Routes pour VenteController
Route::prefix('ventes')->group(function () {
    Route::get('/', [VenteController::class, 'index'])->name('vente.index');
    Route::get('/create', [VenteController::class, 'create'])->name('vente.create');
    Route::post('/store', [VenteController::class, 'store'])->name('vente.store');
    Route::get('/edit/{id}', [VenteController::class, 'edite'])->name('vente.edite');
    Route::put('/update/{id}', [VenteController::class, 'update'])->name('vente.update');
    Route::get('/supprimer/{id}', [VenteController::class, 'supprimer'])->name('vente.supprimer');
});


Route::redirect('/', '/dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


