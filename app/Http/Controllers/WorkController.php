<?php

namespace App\Http\Controllers;

use App\Mail\NewsLetterMail;
use App\Work;
use App\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
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
        
        $work=Work::all();
        $project=Projects::all();
        return view('backoffice.work',compact('work','project'));}
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
        $project=Projects::all();
        return view('backoffice.workCreate',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = $request->file('url');
        $newName = Storage::disk('public')->put('', $work);
        $table = new Work();
        $table->url = $newName;
        $table->title=request('title');
        $table->subtitle=request('subtitle');
        $table->projects_id=$request->type_id;
        $table->save();

        return redirect()->back();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
            # code...
        
        $work = Work::find($id);
        return view('backoffice.workEdit',compact('work'));}
        else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $work = Work::find($id);
        $work->title=request('title');
        $work->subtitle=request('subtitle');
        $work->projects_id=$request->type_id;

        if ($request->HasFile('url')) {
            # code...
            Storage::disk('public')->delete($work->url);
            $file = $request->file('url');
            $filename=Storage::disk('public')->put('',$file);
            $work->url=$filename;
        }
        $work->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Work::find($id);
        Storage::disk('public')->delete($table->url);
        $table->delete();
        return redirect()->back();
    }
}
