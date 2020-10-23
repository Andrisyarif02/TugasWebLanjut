<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class articlesController extends Controller
{
    public function viewArticles($id){
        $articles = Article::find($id);
        $articles = json_decode(json_encode($articles));
        return view('articles', ['articles'=>$articles], ['id'=>$id]);
        $value = Cache::rememberForever('articles', function(){
            return \app\articles::all();
        });    
    }
    public function index()
    {
        $articles = Article::all();
        return view('manage',['articles' => $articles]);
    }
    public function add()
    {
        return view('addarticle');
    }
    public function create(Request $request)
    {
        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'genre' => $request->genre,
            'featured_image' => $request->image
        ]);
        // $article = json_decode(json_encode($article));
        // echo "</pre>"; print_r($article); die; 
        return redirect('/manage');
    }
    public function edit($id)
    {
        $articles = Article::find($id);
        return view('editarticle',['articles'=>$articles]);
    }
    public function update($id, Request $request)
    {
        $articles = Article::find($id);
        $articles->title = $request->title;
        $articles->content = $request->content;
        $articles->genre = $request->genre;
        $articles->featured_image = $request->image;
        $articles->save();
        return redirect('/manage');
    }
    public function delete($id)
    {
        $articles = Article::find($id);
        $articles->delete();
        return redirect('/manage');
    }

}
