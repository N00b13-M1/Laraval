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
        return view("back.pages.articles.edit");
    }

}
