<?php

use Illuminate\Support\Facades\Route;

// Route::view("/", "home");

Route::get('/', fn () => view("home")); // 7.4

Route::view("/contact", "contact");
Route::view("posts/first", "posts.show");
Route::view("/about", "about");
