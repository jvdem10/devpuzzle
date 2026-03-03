<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'Home');
Route::inertia('/about', 'About');

// Game routes
Route::inertia('/guess-the-tech', 'GuessTheTech');
Route::inertia('/reveal-the-tech', 'RevealTheTech');
