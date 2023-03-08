<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Support\Facades;

class CategoryComposer
{
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', Category::all());
    }
}
