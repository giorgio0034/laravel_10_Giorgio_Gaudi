<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    'title',
    'subtitle',
    'body',
    'img',
];

      //Many to Many in Article
        public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }





}
