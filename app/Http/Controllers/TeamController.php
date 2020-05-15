<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            # code...
        
        $team = Team::all();
        return view('backoffice.team',compact('team'));}
        else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.teamCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = $request->file('url');
        $newName = Storage::disk('public')->put('', $team);
        $table = new Team();
        $table->url = $newName;
        $table->name=request('name');
        $table->job=request('job');
        $table->description=request('description');
        $table->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
            # code...
        
        $team = Team::find($id);
        return view('backoffice.teamEdit',compact('team'));}
        else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $team = Team::find($id);
        $team->name=request('name');
        $team->job=request('job');
        $team->description=request('description');
        //
        if($request->hasFile('url')){
            
        Storage::disk('public')->delete($team->url);
        $file = $request->file('url');
        $filename = Storage::disk('public')->put('', $file);
        $team->url = $filename;
        }
        
        

        $team->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        Storage::disk('public')->delete($team->url);
        $team->delete();
        return redirect()->back();
    }
}
