<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        return Article::orderBy('id', 'desc')->paginate(5);
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'body' => 'required']);

        $article = new Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->slug = str_slug($request->title, '-');
        $article->save();

        return back()->with('message', 'Done!');
    }

    public function show(Article $article)
    {
        return view('admin.article.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $this->validate($request, ['title' => 'required', 'body' => 'required']);

        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return back()->with('message', 'Done!');
    }

    public function destroy(Article $article)
    {
        $article->destroy();

        return back()->with('message', 'Done!');
    }
}
