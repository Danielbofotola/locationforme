<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});


// Route pour l'administration publique (évite le conflit avec Filament /admin)
Route::get('/admin/reservations-frontend', [ReservationController::class, 'index'])->name('admin.reservations.index');

Route::post('/reservations', [ReservationController::class, 'store'])
    ->name('reservations.store');
