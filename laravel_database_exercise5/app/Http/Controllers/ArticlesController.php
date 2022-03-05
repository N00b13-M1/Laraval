<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function articles(){
        $articles = Article::all();
        return view('/pages/articles',compact('articles'));
    }
}
