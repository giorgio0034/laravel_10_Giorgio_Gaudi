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
        'img'
    ];



}
