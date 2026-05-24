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



//? Metodo 1
//MASS ASSIGNMENT

/*
if($request->file('img')){//l'utente mi ha passato l'immagine?
           Article::create([
            'title'=>$request->title,
            'subtitle'=> $request->subtitle,
            'body'=> $request->body,
            'img'=> $request->file('img')->store('img', 'public'),
        ]);

}
else{
    //se non mi passa l'immagine allora assegnerà l'immagine di default

    Article::create([
            'title'=>$request->title,
            'subtitle'=> $request->subtitle,
            'body'=> $request->body,

        ]);
}

*/


//? Metodo 2


    $article = Article::create([
            'title'=>$request->title,
            'subtitle'=> $request->subtitle,
            'body'=> $request->body,

        ]);

        if($request->file('img')){//L'utente mi ha passato l'immagine?
            $article->img= $request->file('img')->store('img','public');//Valorizzo l'oggetto con il nuovo valore di img
            $article->save();//Salvo nel database il nuovo valore dell'oggetto
        }












        //$title=$request->title;
        //$subtitle=$request->subtitle;
        //$body=$request->body;
       // $img = $request->file('img')->store('img', 'public');



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
    public function edit(Article $article)
    {
        return view('article.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {

    //dd($request->all(),$article);
    if($request->file('img')){
        $img = $request->file('img')->store('img','public');
    }
    else{
        $img=$article->img;
    }


        $article->update([
            'title'=>$request->title,
            'subtitle'=> $request->subtitle,
            'body'=> $request->body,
            'img'=> $img


        ]);



        return redirect(route('article.index'))->with('message','articolo modificato');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //metodo per eliminare un articolo
        $article->delete();


     return redirect()->back()->with('message','articolo eliminato');

    }


}

