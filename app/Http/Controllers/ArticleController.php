<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($n)
    {
        // the same as return view('article')->withNumber($n);
        return view('article')->with('number', $n);

    }
}
