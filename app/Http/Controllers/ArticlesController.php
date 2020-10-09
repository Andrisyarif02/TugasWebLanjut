<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class articlesController extends Controller
{
    public function __invoke($id){
        $articles = Article::find($id);
        $articles = json_decode(json_encode($articles));
        return view('articles', ['articles'=>$articles], ['id'=>$id]);
        $value = Cache::rememberForever('articles', function(){
            return \app\articles::all();
        });    
    }
}
