<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index() {
        return view('articles', [
            "name" => "Abidjanna Zulfa Hamdika",
            "email" => "hufahamdika7997@gmail.com",
            "articles" => Article::latest()->get()
        ]);
    }

    public function contents(Article $article){
        return view('article', [
            "article" => $article
        ]);
    }

}
