<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function showArticles()
    {
        $articles = Article::with('writer')
                           ->latest()
                           ->get();

        return view('showArticles', compact('articles'));
    }


    public function writeArticle()
    {
        return view('admin.writeArticle');
    }


    public function store(Request $request, $id)
    {
        Article::create([
            'user_id'     => $id,
            'title'       => request('title'),
            'description' => request('description'),
            'body'        => request('body'),
        ]);

        return redirect(route('showArticles'));
    }


    public function show(Article $article)
    {
        //
    }


    public function edit(Article $article)
    {
        //
    }


    public function update(Request $request, Article $article)
    {
        //
    }


    public function destroy(Article $article)
    {
        //
    }
}
