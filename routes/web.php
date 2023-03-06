<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles/create', [ArticleController::class, 'create']);

Route::post('/articles', [ArticleController::class, 'store']);

Route::get('/articles/{article}/edit', [ArticleController::class, 'edit']);

Route::put('/articles/{article}', [ArticleController::class, 'update']);

Route::get('/articles/{article}', [ArticleController::class, 'show']);