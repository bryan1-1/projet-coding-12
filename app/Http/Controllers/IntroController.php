<?php

namespace App\Http\Controllers;

use App\Intro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   if (Auth::check()) {
        # code...
    
        $intro=Intro::all();
        return view('backoffice.intro',compact('intro'));}
        else{
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
        return view('backoffice.introCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $intro = $request->file('url');
        $newName = Storage::disk('public')->put('', $intro);
        $table = new Intro();
        $table->url = $newName;
        $table->title=request('title');
        $table->subtitle=request('subtitle');
        $table->informative=request('informative');
        $table->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function show(Intro $intro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
            # code...
        
        $intro = Intro::find($id);
        return view('backoffice.introEdit',compact('intro'));}
        else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $intro = Intro::find($id);
        $intro->title=request('title');
        $intro->subtitle=request('subtitle');
        $intro->informative=request('informative');
        //
        if($request->hasFile('url')){
            
        Storage::disk('public')->delete($intro->url);
        $file = $request->file('url');
        $filename = Storage::disk('public')->put('', $file);
        $intro->url = $filename;
        }
        
        

        $intro->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Intro::find($id);
        Storage::disk('public')->delete($table->url);
        $table->delete();
        return redirect()->back();
    }
}
