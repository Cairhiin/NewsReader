<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/', function() {
    return view('home', [
        'articles' => Article::all()
    ]);
});

Route::get('/articles', function() {
    return view('home');
});

Route::get('/articles/{id}', function($id) {
    return view('home', [
        'article' => Article::find($id)
    ]);
})->where('id', '[0-9]+');
