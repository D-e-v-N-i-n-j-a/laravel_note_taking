<?php

use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;


// AUTH MIDDLE WARES
Route::middleware(['auth'])->group(function () {
    Route::get('/', [NoteController::class, 'index'])->name('home');
    Route::view('/create', 'pages.create')->name('create');
    Route::post('/create',[NoteController::class,'create']);
    Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('destroy');
});

// GUEST MIDDLEWARE 
Route::middleware('guest')->group(function () {
    Route::view('/register', 'pages.register')->name('register');
    Route::post('/register', [AuthControllers::class, 'register']);
    Route::view('/login', 'pages.login')->name('login');
    Route::post('/login', [AuthControllers::class, 'login']);
});



Route::post('/logout', [AuthControllers::class, 'logout'])->name('logout');


