<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
        try {
            $this->validate($request, [
                'title'       => 'required|max:60',
                'body'        => 'required',
                'description' => 'required|max:171',
            ]);

        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Error! Get some error handling to get done here',
            ], 400);
        }

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
