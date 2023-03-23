<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

// Article Routes
Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles/create', 
    [ArticleController::class, 'create'])->middleware('auth');

Route::post('/articles', 
    [ArticleController::class, 'store'])->middleware('auth');

Route::get('/articles/{article}/edit', 
    [ArticleController::class, 'edit'])->middleware('auth');

Route::put('/articles/{article}', 
    [ArticleController::class, 'update'])->middleware('auth');

Route::delete('/articles/{article}', 
    [ArticleController::class, 'destroy'])->middleware('auth');

Route::get('/articles/manage', 
    [ArticleController::class, 'manage'])->middleware('auth');
        
Route::get('/articles/{article}', [ArticleController::class, 'show']);

// User Routes
Route::get('/register', 
    [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', 
    [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', 
    [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::put('/users/{user}', 
    [UserController::class, 'update'])->middleware('auth');

Route::get('/users/{user}', [UserController::class, 'show'])->middleware('auth');

// Category Routes
Route::get('/categories/{category}', [CategoryController::class, 'show']);