<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    //
    public function show($post)
    {

        $posts = [
            1 => 'ict-fw',
            2 => 'first-fb',
            3 => 'prog-exp',
            4 => 'swot-a',
            5 => 'study-ch',
        ];

        return view("blog-posts/$posts[$post]");
    }
}
