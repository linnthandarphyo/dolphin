<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
protected $fillable=['name'];

    public function movies($value='')
    {
    	 return $this->belongsTO('App\Movie');
    }
}
