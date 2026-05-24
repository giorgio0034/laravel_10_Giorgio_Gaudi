<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{

    //Questa proprietà definisce i campi del mio modello
    protected $fillable = [
        'name',
        'surname',
        'age',
        'email',
        'img',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class); //Questo metodo ci indica che quando richiamo il metodo user ci ritorna l'utente collegato al prodotto
    }

}
