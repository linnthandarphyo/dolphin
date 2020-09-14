<?php

namespace App\Http\Controllers;

use App\Genres;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres=Genres::all();
        return view('backend.genres.index',compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.genres.create');
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
        // Validation
        $request->validate([
            //form input name
            "title"=>'required'
        ]);
        //Data insert
            $genres = new Genres;
            //database column=input name
            $genres->title=$request->title;
            $genres->save();

        //redirect
            return redirect()->route('genres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function show(Genres $genres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genres=Genres::find($id);
        return view('backend.genres.edit',compact('genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            //form input name
            "title"=>'required'
        ]);
        //Data insert
            $genres =Genres::find($id);
            //database column=input name
            $genres->title=$request->title;
            $genres->save();
        //redirect
            return redirect()->route('genres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genres=Genres::find($id);
        $genres->delete();
      return redirect()->route('genres.index');
    }
}
