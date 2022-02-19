<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
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

    public function create()
    {
        return view('blog-create');
    }

    public function store(Request $request)
    {
        $properties = $request->validate([
            'title' =>['required','min:5', 'max:50',],
            'header1' =>['required',],
            'header2' =>[],
            'paragraph1' =>['required','min:10'],
            'paragraph2' =>['',''],
        ]);
        Article::create($properties);

        return Redirect('blog');
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('blog-edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $properties = $request->validate([
            'title' =>['required','min:5', 'max:50',],
            'header1' =>['required',],
            'header2' =>[],
            'paragraph1' =>['required','min:10'],
            'paragraph2' =>['',''],
        ]);

        Article::find($id)->update($properties);

        return Redirect('blog');
    }

    public function destroy($id)
    {
        Article::find($id)->delete();
        return Redirect('blog');
    }
}
