<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController extends Controller
{
    //

    // Shows ALL articles
    public function index()
    {
        $article = Article::latest()->get();

        return view('blog', ['articles' => $article]);
    }

    // Shows a SINGLE article
    public function show($id)
    {
        $article = Article::find($id);
        return view("blog-posts.show", ['article' => $article]);
    }
}
