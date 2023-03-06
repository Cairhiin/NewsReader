<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

// Article Routes
Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles/create', [ArticleController::class, 'create']);

Route::post('/articles', [ArticleController::class, 'store']);

Route::get('/articles/{article}/edit', [ArticleController::class, 'edit']);

Route::put('/articles/{article}', [ArticleController::class, 'update']);

Route::delete('/articles/{article}', [ArticleController::class, 'destroy']);

Route::get('/articles/{article}', [ArticleController::class, 'show']);

// User Routes
Route::get('/register', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);