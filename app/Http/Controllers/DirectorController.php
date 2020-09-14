<?php

namespace App\Http\Controllers;

use App\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors=Director::all();
        return view('backend.directors.index',compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.directors.create');
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
            "name"=>'required'
        ]);
        //Data insert
            $director = new Director;
            //database column=input name
            $director->name=$request->name;
            $director->save();

        //redirect
            return redirect()->route('directors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $director=Director::find($id);
        return view('backend.directors.edit',compact('director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            //form input name
            "name"=>'required'
        ]);
           $director=Director::find($id);
            //database column=input name
            $director->name=$request->name;
            $director->save();

        //redirect
            return redirect()->route('directors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $director=Director::find($id);
        $director->delete();
        return redirect()->route('directors.index');
    }
}
