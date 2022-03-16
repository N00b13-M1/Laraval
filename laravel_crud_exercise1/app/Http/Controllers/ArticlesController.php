<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::all();
        // dd($articles[0]);
            return view("back.pages.articles.articles", compact("articles"));
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        // dd($article[1]);
        $article->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view("back.pages.articles.edit", compact('article'));
    }

    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $article->name = $request->name;
        $article->description = $request->description;
        $article->author = $request->author;
        $article->publication_date = $request->publication_date;

        $article->save();
        return redirect()->route('articles.index');
    }

    public function create()
    {
        return view("back.pages.articles.create");
    }

    public function store(Request $request)
    {
        $article = new Article;
        $article->name = $request->name;
        $article->description = $request->description;
        $article->author = $request->author;
        $article->publication_date = $request->publication_date;

        $article->save();
        return redirect()->route('articles.index');
    }
}
