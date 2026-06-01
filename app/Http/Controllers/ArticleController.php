<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



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
        $tags = Tag::all();//recupero tutti i tag della tabella tags(SELECT * FROM tags)


        return view( 'article.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  //  dd($request->all());


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

        $article
        ->tags()// Qui sto utilizzando il modello Many to many che ho definito nel modello
                //Compio questa operazione quando devo SCRIVERE nel DB
        ->attach($request->tags);//Con il metodo attach gli passo gli ID degli oggetti che voglio mettere in relazione
                                 //al modello di partenza
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
        $tags = Tag::all();
        return view('article.edit',compact('article','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {

    //dd($request->all(),$article);
    if($request->file('img')){


        Storage::disk('public')->delete($article->img);//eliminare la vecchia immagine
        $img = $request->file('img')->store('img','public');//la funzione store parte dal percorso storage/app



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

        $article->tags()->sync($request->tags);//Sincronizza l'attuale relazione aggiornata tra i tag selezionati e quelli deselezionati


        return redirect(route('article.index'))->with('message','articolo modificato');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

        $article->tags()->detach();//Eliminare ogni vincolo di relazione tra i due modelli

        //metodo per eliminare un articolo
        $article->delete();


     return redirect()->back()->with('message','articolo eliminato');

    }


}

