<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\MapadeSitioController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('perfil', PerfilController::class)->only(['index', 'update']);
Route::resource('ofertas', OfertaController::class)->except(['show']);
Route::resource('favoritos', FavoritoController::class)->only(['index', 'store', 'destroy'])->middleware('auth');

Route::get('/favoritos/generar-pdf', [FavoritoController::class, 'generarFavoritosPDF'])->name('favoritos.pdf');

Route::get('/sitemap', [MapadeSitioController::class, 'index'])->name('sitemap.index');

// Generar PDF
Route::get('/ofertas/consultar-pdf', [OfertaController::class, 'consultarPdf'])->name('ofertas.consultarPdf');
Route::get('/imprimir', [GeneradorController::class, 'imprimir'])->name('imprimir');
