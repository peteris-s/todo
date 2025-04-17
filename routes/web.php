<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;

// Public pages
Route::get('/', fn() => view('welcome'));
Route::get('/why', fn() => view('why'));

// Publicly viewable routes
Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);

Route::get('/diaries', [DiaryController::class, 'index']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);

// Authentication routes
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');

// Routes that require login
Route::middleware('auth')->group(function () {
    // ToDo
    Route::get('/todos/create', [ToDoController::class, 'create']);
    Route::post('/todos', [ToDoController::class, 'store']);
    Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit']);
    Route::put('/todos/{todo}', [ToDoController::class, 'update']);
    Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);

    // Diary
    Route::get('/diaries/create', [DiaryController::class, 'create']);
    Route::post('/diaries', [DiaryController::class, 'store']);
    Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit']);
    Route::put('/diaries/{diary}', [DiaryController::class, 'update']);
    Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy']);

    // Any other protected routes
    Route::get('/lohs', fn() => view('todos.lohs'));
});
