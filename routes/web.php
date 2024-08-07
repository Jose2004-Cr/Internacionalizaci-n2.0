<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\CartasController;
use App\Http\Controllers\EventoController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/terms', [TermsController::class, 'show'])->name('terms.show');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/mapa', [MapaController::class, 'index'])->name('mapa');
    Route::get('/calendario', [CalendarioController::class, 'index'])->name('calendario.index');
    Route::get('/reporte', [ReporteController::class, 'index'])->name('reporte');
    Route::get('/soporte', [SoporteController::class, 'index'])->name('soporte');
    Route::get('/homecartas', [CartasController::class, 'index'])->name('homecartas');

    Route::post('/eventos', [HomeController::class, 'store'])->name('eventos.store');
    Route::get('/calendario/eventos', [CalendarioController::class,'mostrarPorFecha'])->name('calendario.eventos');
    Route::get('/homecartas/{id}', [EventoController::class, 'show'])->name('homecartas');

});
