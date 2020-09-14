<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexfun($value='')
    {
    	return view('frontend.master');
    }
    public function detailfun($value='')
    {
    	return view('frontend.movie_detail');
    }
    public function landingfun($value='')
    {
    	return view('frontend.landing');
    }
    public function commingfun($value='')
    {
    	return view('frontend.commingsoon');
    }
    public function movieFun($value='')
    {
        $movies =Movie::all();
        return view ('frontend.movie',compact('movies'));
    } 
    public function genreFun($value='')
    {
        //$genres =Genres::all();
        return view ('frontend.genress');
    }
    

}
