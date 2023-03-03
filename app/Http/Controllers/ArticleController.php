<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return view('articles.index', [
            'articles' => Article::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show(Article $article) {
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create() {
        return view('articles.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required'
        ]);

        Article::create($formFields);
        
        return redirect('/');
    }
}
