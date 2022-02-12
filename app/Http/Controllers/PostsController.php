<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostsController extends Controller
{
    //
    public function show($post)
    {

        $posts = [1 => 'ict-fw', 2 => 'first-fb', 3 => 'prog-exp', 4 => 'swot-a', 5 => 'study-ch',];

        if(!array_key_exists($post, $posts)) {
            throw new NotFoundHttpException();
        }
        return view("blog-posts/$posts[$post]");

    }
}
