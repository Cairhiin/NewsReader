<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index', [
            'articles' => Article::latest()->with('author')->with('category')->filter(request(['tag', 'category', 'search']))->simplePaginate(6)
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
            'tags' => 'required',
            'category_id' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];
            $fileExt = $image->getClientOriginalExtension();

            if(!in_array($fileExt, $allowedExtensions)) {
                return back()->withErrors(['image' => 'Invalid file format']); 
            }

            if($image->getSize() <= 2000000) {
                $formFields['image'] = $image->store('images', 'public');
            } else {
                return back()->withErrors(['image' => 'File is too large']); 
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
