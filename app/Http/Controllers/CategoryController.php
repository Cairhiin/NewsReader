<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public static function categories() {
        $categories = Category::all();
    }

    public function show(Category $category) {
        return view('categories.show', [
            'category' => $category,
            'articles' => Article::latest()->with('category')
                ->where('category_id', '=', $category->id) 
                ->simplePaginate(20)
        ]);
    }
}
