<?php

//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\DB;

use App\Http\Controllers\OrdenadorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('ordenadores', OrdenadorController::class)->parameters([
    'ordenadores' => 'ordenador',
]);

//  Route::get('alumnos/criterios/{alumno}', [AlumnoController::class, 'criterios'])->name('alumnos.criterios');

//  Route::put('prestamos/devolver/{prestamo}', [PrestamoController::class, 'devolver'])->name('prestamos.devolver');

//  Route::post('videojuegos/adquirir/{videojuego}', [VideojuegoController::class, 'adquirir'])->name('videojuegos.adquirir')->middleware('auth');



//  Route::resource('ejemplares', EjemplarController::class)->parameters([
//      'ejemplares' => 'ejemplar',
//  ]);

require __DIR__.'/auth.php';
