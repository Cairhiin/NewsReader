<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
            'articles' => Article::latest()
                ->where('category_id', '=', $category->id) 
                ->simplePaginate(11),
            'populairArticles' => Article::all()
                ->where('category_id', '=', $category->id) 
                ->where('created_at', '>=', Carbon::now()->subDays(30)->toDateTimeString())
                ->sortByDesc('views')
                ->take(10)
        ]);
    }
}
