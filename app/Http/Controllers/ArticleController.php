<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index', [
            'articles' => Article::latest()->with('author')->filter(request(['tag', 'search']))->simplePaginate(6)
        ]);
    }

    public function show(Article $article)
    {
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];
            $fileExt = explode('.', $request->file('image')->getClientOriginalName());
            $fileExt = strtolower(end($fileExt));
            
            if(in_array($fileExt, $allowedExtensions)) {
                $formFields['image'] = $request->file('image')->store('images', 'public');
            } else {
                return back()->withErrors(['image' => 'Invalid file format']); 
            }
        }

        $formFields['author_id'] = Auth::id();

        Article::create($formFields);

        return redirect('/')->with('message', 'Article created successfully!');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request, Article $article)
    {
        // Check if user is owner
        if ($article->author_id != Auth::id()) {
            abort(403, 'Unauthorized Request');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $article->update($formFields);

        return redirect('/articles/' . $article->id)->with('message', 'Article update successfully!');
    }

    public function destroy(Article $article)
    {
        // Check if user is owner
        if ($article->author_id != Auth::id()) {
            abort(403, 'Unauthorized Request');
        }

        $article->delete();
        return redirect('/')->with('message', 'Article deleted successfully!');
    }

    public function manage()
    {
        return view('articles.manage', ['articles' => Auth::user()->articles()->get()]);
    }
}
