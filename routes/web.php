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

Route::get('/articles/{id}', function($id) {
    return view('article', [
        'article' => Article::find($id)
    ]);
})->where('id', '[0-9]+');
