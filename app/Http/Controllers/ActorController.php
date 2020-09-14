<?php

namespace App\Http\Controllers;

//use App\Movie;
//use App\Director;
use App\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors =Actor::all();
        return view('backend.actors.index',compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.actors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'name'=>'required',
            'gender'=>'required'
        ]);

        $actors =new Actor;
        $actors->name=$request->name;
        //$actors->age=$request->age;
        $actors->gender=$request->gender;

        $actors->save();

        return redirect()->route('actors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        // $actors =Actor::all();
        // return view('backend.actors.detail',compact('actors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        
        $actors =Actor::find($id);
        return view('backend.actors.edit',compact('actors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request ->validate([
            'name'=>'required'
        ]);

        $actors=Actor::find($id);
        $actors->name=$request->name;
        //$actors->age=$request->age;
        $actors->gender=$request->gender;

        $actors->save();

        return redirect()->route('actors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actors=Actor::find($id);

        $actor->delete();
        return redirect()->route('actors.index');
    }
}
