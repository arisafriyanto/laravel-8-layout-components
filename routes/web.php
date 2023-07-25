<?php

use App\Http\Controllers\{HomeController, ContactController, LoginController, ProfileInformationController, RegistrationController, TaskController, UserController};
use Illuminate\Support\Facades\Route;

// Route::get('/', fn () => view("home")); // 7.4

Route::get('/', HomeController::class)->name('home');


//* Route Resource
Route::resource('tasks', TaskController::class);


// Route::get('tasks', [TaskController::class, 'index']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('tasks/{id}', [TaskController::class, 'update']);
// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

Route::get('register', [RegistrationController::class, 'create'])->name('register');
Route::post('register', [RegistrationController::class, 'store']);

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']); //? valid jika ingin panggil name route di formnya

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');
