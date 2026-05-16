<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::middleware('auth')->group(function () {
    Route::get('/ideas', [IdeaController::class, 'index']);

    //Create
    Route::get('/ideas/create', [IdeaController::class, 'create']);

    // Show
    Route::get('/ideas/{idea}', [IdeaController::class, 'show']);

    // Edit
    Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);

    // Update
    Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);

    // Store
    Route::post('/ideas', [IdeaController::class, 'store']);

    // Destroy
    Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);

    Route::delete('/logout', [SessionController::class, 'destroy']);
});
// Index
Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
});
