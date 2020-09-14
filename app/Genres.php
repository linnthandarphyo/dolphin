<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $fillable=['title'];

    public function movies($value='')
    {
    	 return $this->belongsTOMany('App\Movie','movie_genre')
    	              ->withTimestamps();
    }
}
