<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    //

    public function show()
    {
        // abort(500);
        return view('welcome');
    }
}
