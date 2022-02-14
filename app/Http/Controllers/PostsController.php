<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PostsController extends Controller
{
    //
    public function show ($id)
    {
        $article = Article::find($id);
        return view("blog-posts/show", ['article' => $article]);
    }
}
