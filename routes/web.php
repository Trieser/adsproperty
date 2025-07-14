<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PropertyController;

// Home page route
Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

// Property CRUD
Route::resource('properties', PropertyController::class)->except(['show']);