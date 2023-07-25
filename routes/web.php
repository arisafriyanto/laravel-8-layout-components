<?php

use App\Http\Controllers\{HomeController, LoginController, LogoutController, RegistrationController, TaskController, UserController};
use Illuminate\Support\Facades\Route;

// Route::get('/', fn () => view("home")); // 7.4

Route::get('/', HomeController::class)->name('home');

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');

Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('register', [RegistrationController::class, 'create'])->name('register');
    Route::post('register', [RegistrationController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']); //? valid jika ingin panggil name route di formnya
});
