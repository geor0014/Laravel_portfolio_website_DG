<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $article = Article::latest()->get();
        return view('blog', ['articles' => $article]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    // Shows a SINGLE article
    public function show($id)
    {
        $article = Article::find($id);

        return view("blog-posts.show", ['article' => $article]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('blog-create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $article = Article::find($id);

        return view('blog-edit', compact('article'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Article::find($id)->delete();
        return Redirect('blog');
    }
}
