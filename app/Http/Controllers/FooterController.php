<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FooterController extends Controller
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
        
        $footer=Footer::all();
        return view('backoffice.footer',compact('footer'));}
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
            # code...
        
        $footer=Footer::find($id);
        return view('backoffice.footerEdit',compact('footer'));}
        else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $footer=Footer::find($id);
        $footer->title=request('title');
        $footer->description=request('description');
        $footer->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
