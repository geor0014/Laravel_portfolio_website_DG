<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController extends Controller
{
    //

    public function show ()
    {
        $article = Article::latest()->get();

        return view('blog',['articles' => $article]);
    }
}
