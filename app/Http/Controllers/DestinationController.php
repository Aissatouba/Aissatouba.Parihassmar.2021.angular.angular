<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Destination};
use App\Models\User;


class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destination = Destination::orderBy("date", "DESC")->get();
        return view("destinations.index",compact('destination'))->with('i', (request()->input('page',1) - 1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("destinations.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'villeDepart' => 'required',
            'villeArrivee' => 'required',
            'heuredepart' => 'required',
            'date' => 'required',
        ]);
        
        Destination::create($request->all());

        return redirect()->route('destinations.index')->with('success', 'destination cree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $user = User::all();
        // dd($user);
        $destination= Destination::find($id);
        // dd($destination);
        return view('destinations.show',compact('destination','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        return view('destinations.edit',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Destination $destination)
    {
        $request->validate([
        
        ]);

        $destination::where('id', $destination->id)->update($request->except(['_token','_method','submit']));

        return redirect()->route('destinations.index')->with('success', 'destination editer');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        Destination::find($destination->id)->delete();

        return redirect()->route('destinations.index')->with('success', 'destination supprimé');
    }
    public function reserver(){
        return view("destinations.reservation");

    }
}
