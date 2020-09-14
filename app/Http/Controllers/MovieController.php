<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Actor;
use App\Director;
use App\Genres;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=Movie::all();
        return view('backend.movies.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actors=Actor::all();
        $directors=Director::all();
        $genres=Genres::all();
        return view('backend.movies.create',compact('actors','directors','genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        // $stars=json_decode($request->star);//array to string conversion
        // dd($stars);
        // Validation
        $request->validate([
            //form input name
            "title"=>'required',
            "photo"=>'required',
            'director'=>'required',
            'genre'=>'required',
            "link"=>'required',
            "star"=>'required',
            "point"=>'required',
            "quality"=>'required',
            "size"=>'required',
            "review"=>'required',
            "year"=>'required',
            "time"=>'required',
            "country"=>'required',
            "rating"=>'required'

        ]);
        $starString=implode(',', $request->input('star'));
        $genreString=implode(',', $request->input('genre'));
        //dd($arrayToString);

            
        //If include file , upload file
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/movieimg'),$imageName);
            $path = 'backend/movieimg/'.$imageName;
        //Data insert
            $movie = new Movie;
            //database column=input name
            $movie->title=$request->title;
            $movie->photo=$path;
            $movie->director=$request->director;
            $movie->genre=$genreString;
            $movie->link=$request->link;
            $movie->stars=$starString;
            $movie->good_point=$request->point;
            $movie->quality=$request->quality;
            $movie->size=$request->size;
            $movie->review=$request->review;
            $movie->release_year=$request->year;
            $movie->run_time=$request->time;
            $movie->release_country=$request->country;
            $movie->rating=$request->rating;
            $movie->save();
            //$movie->actors()->attach($actors);
       //      foreach ($cartArr as $row) {
       //     $movie->genres()->attach($row->id,['comment'=>$row->comment]);
       //     $movie->actors()->attach($row->id,['coment' =>$row->comment]);
       // }

        //redirect
            return redirect()->route('movies.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies=Movie::find($id);
        $actors=Actor::all();
        $directors=Director::all();
        $genres=Genres::all();
        return view('backend.movies.edit',compact('movies','actors','directors','genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //dd($request);
        // Validation
        $request->validate([
            //form input name
            "title"=>'required',
            "photo"=>'required',
            'director'=>'required',
            'genre'=>'required',
            "link"=>'required',
            "star"=>'required',
            "point"=>'required',
            "quality"=>'required',
            "size"=>'required',
            "review"=>'required',
            "year"=>'required',
            "time"=>'required',
            "country"=>'required',
            "rating"=>'required'

        ]);
            $movie=Movie::find($id);
         //file upload , if data
        if($request->hasFile('photo')){
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/movieimg'),$imageName);
            $path = 'backend/movieimg/'.$imageName;

        }else{
            $path=$request->oldphoto;
        }
            //database column=input name
            $movie->title=$request->title;
            $movie->photo=$path;
            $movie->director=$request->director;
            $movie->genre=$request->genre;
            $movie->link=$request->link;
            $movie->stars=$request->star;
            $movie->good_point=$request->point;
            $movie->quality=$request->quality;
            $movie->size=$request->size;
            $movie->review=$request->review;
            $movie->release_year=$request->year;
            $movie->run_time=$request->time;
            $movie->release_country=$request->country;
            $movie->rating=$request->rating;
            $movie->save();

        //redirect
            return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie=Movie::find($id);
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
