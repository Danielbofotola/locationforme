<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Espace de connexion propre à ton admin custom
Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

// Page d'admin personnalisée basée sur resources/views/index.blade.php,
// protégée par l'auth Laravel classique (guard "web").
Route::middleware(['auth'])->group(function () {
    Route::get('/admin-template', [AdminDashboardController::class, 'index'])
        ->name('admin.template');

    // Création d'utilisateurs depuis l'espace admin
    Route::get('/admin/users/create', [AuthController::class, 'showRegisterForm'])
        ->name('admin.users.create');

    Route::post('/admin/users', [AuthController::class, 'register'])
        ->name('admin.users.store');

    Route::delete('/admin-template/reservations/{reservation}', [AdminDashboardController::class, 'destroyReservation'])
        ->name('admin.template.reservations.destroy');
});

// Route pour l'administration publique (évite le conflit avec Filament /admin)
Route::get('/admin/reservations-frontend', [ReservationController::class, 'index'])
    ->name('admin.reservations.index');

Route::post('/reservations', [ReservationController::class, 'store'])
    ->name('reservations.store');
