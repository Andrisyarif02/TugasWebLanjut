<?php

namespace App\Http\Controllers;
use App\Article;

class HomeControllerawal extends Controller
{
    public function awal(){
        $articlesAll = Article::all();
        $articles = json_decode(json_encode($articlesAll));
        return view('homeawal')->with(compact('articlesAll'));
        $value = Cache::rememberForever('articles', function(){
            return \App\Article::all();
        });
    }
}
