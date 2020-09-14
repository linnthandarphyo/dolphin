<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable=['name','gender'];

    public function movies($value='')
    {
    	return $this->belongsToMany('App\Movie','movie_actor')
    	             ->withTimestamps();
                
    }
}
