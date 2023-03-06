<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return view('articles.index', [
            'articles' => Article::latest()->filter(request(['tag', 'search']))->simplePaginate(6)
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

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Article::create($formFields);

        return redirect('/')->with('message', 'Article created successfully!');
    }
}
