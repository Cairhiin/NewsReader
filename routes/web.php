<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles/create', [ArticleController::class, 'create']);

Route::get('/articles/{article}', [ArticleController::class, 'show']);