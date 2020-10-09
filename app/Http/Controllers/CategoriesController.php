<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use \Cache;

class CategoriesController extends Controller
{
    public function __invoke($cat){
        $articlesAll = Article::all()->where('Genre', $cat);
        
        $value = Cache::rememberForever('articles', function(){

            return \App\Article::all();
        });
        return view('categories')->with(compact('articlesAll', 'cat'));
    }
}
