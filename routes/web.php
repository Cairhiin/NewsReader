<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/', function() {
    return view('articles', [
        'articles' => Article::all()
    ]);
});

Route::get('/articles', function() {
    return view('articles');
});

Route::get('/articles/{article}', function(Article $article) {
    return view('article', [
        'article' => $article
    ]);
});
