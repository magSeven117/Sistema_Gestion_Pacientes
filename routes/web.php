<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MunicipioController; // ⚠️ Agregar esta línea
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para CRUD de Pacientes
    Route::resource('pacientes', PacienteController::class);

    // Ruta para obtener municipios por departamento
    Route::get('/municipios/{departamento_id}', [MunicipioController::class, 'getByDepartamento'])->name('municipios.get');
});

require __DIR__.'/auth.php';
