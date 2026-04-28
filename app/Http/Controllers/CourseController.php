<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TraineeRequest;
use App\Models\Trainee;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function signup(TraineeRequest $request){//Modifico il tipo di classe Request che passo come parametro



    $name=$request->name;
    $surname=$request->surname;
    $age=$request->age;
    $email=$request->email;
    $img=null;


if($request->file('img')){
    $img = $request->file('img')->store('img', 'public');
}


//il metodo file mi cattura l'Uploaded file della request
    // il metodo store mi salva il file nel percorso storage/app/public/img









    //crea un nuovo oggetto di classe Trainee
    //$trainee= new Trainee();

    //Valorizza i campo dlel'oggetto $trainee
    //$trainee->name=$name;
    //$trainee->surname=$surname;
    //$trainee->age=$age;
    //$trainee->email=$email;



        //sto salvando il prodotto del mio db
        //$trainee->save();


    Trainee::create([
        'name'=> $name,
        'surname'=>$surname,
        'age'=>$age,
        'email'=>$email,
        'img'=>$img
    ]);






    return redirect()->route('home')->with('success', 'Iscrizione completata!');


   }

   public function list(){

   $trainees= Trainee::all();

   return view('trainee.list',['trainees'=>$trainees]);
   }


public function subscribe() {
    return view('trainee.subscribe');
}

}
