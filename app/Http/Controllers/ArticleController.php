<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.basic', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        return Article::paginate(2);
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'body' => 'required']);

        Article::create($request->all());

        return back();
    }

    public function edit(Article $article)
    {

    }

    public function update(Request $request, Article $article)
    {

    }

    public function destroy(Article $article)
    {

    }
}
