<?php

use App\Http\Controllers\{HomeController, ContactController, ProfileInformationController, TaskController};
use Illuminate\Support\Facades\Route;

// Route::get('/', fn () => view("home")); // 7.4

Route::get('/', HomeController::class)->name('home');
Route::get('profile/{identifier}', ProfileInformationController::class)->name('profile');

Route::get('tasks', [TaskController::class, 'index']);
// Route::get('tasks/create', [TaskController::class, 'create']);
Route::post('tasks', [TaskController::class, 'store']);
Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
Route::put('tasks/{id}', [TaskController::class, 'update']);
Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);
