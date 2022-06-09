<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    private $article;

    public function __construct(Article $article)
    {
        // $this->middleware('auth');
        $this->article  = $article;
    }

    public function index()
    {
        return view('article.index');
    }

    public function create()
    {
        return view('article.create');
    }

    public function storeCreate(Request $request, Article $article)
    {
        $artistLiveNames = $input['artistLiveName'] = $request->input('artistLiveName');
        $liveSchedules = $input['liveSchedule'] = $request->input('liveSchedule');
        $setlists = $input['setlist'] = $request->input('setlist');
        $article->fill($input)->save();
        return view('article.create', compact('artistLiveNames', 'liveSchedules', 'setlists'));
    }
}
