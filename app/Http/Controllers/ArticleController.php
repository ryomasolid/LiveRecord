<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    private $article;
    private $user;

    public function __construct(Article $article, User $user)
    {
        $this->middleware('auth');
        $this->article  = $article;
        $this->user     = $user;
    }

    public function index()
    {
        $articles = $this->article->all();
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function destroy($id)
    {
        $this->article->find($id)->delete();
        return redirect()->route('article.index');
    }

    public function storeCreate(Request $request, Article $article)
    {
        $input['artistLiveName'] = $request->input('artistLiveName');
        $input['liveSchedule'] = $request->input('liveSchedule');
        $input['setlist'] = $request->input('setlist');
        $article->fill($input)->save();
        return redirect()->route('article.index');
    }
}
