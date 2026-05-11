<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();// Mi recupera dal DB tutti gli articoli e li salva in una collezione
        return view('article.index', compact('articles')
       // ['articles'=>$articles]);
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title=$request->title;
        $subtitle=$request->subtitle;
        $body=$request->body;
        $img = $request->file('img')->store('img', 'public');

        //MASS ASSIGNMENT
        Article::create([
            'title'=> $title,
            'subtitle'=> $subtitle,
            'body'=> $body,
            'img'=> $img,
        ]);

        return redirect()->back()->with('message','articolo inserito con successo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
