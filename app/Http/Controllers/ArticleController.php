<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index');
    }

    public function create()
    {
        return view('article.create');
    }

    public function storeCreate(Request $request)
    {
        return view('article.create');
    }
}
