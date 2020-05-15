<?php

namespace App\Http\Controllers;

use App\Adress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdressController extends Controller
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
        
        $address= Adress::all();
        return view('backoffice.address',compact('address'));}
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
        if (Auth::check()) {
            # code...
        
        $address=Adress::all();
        return view('backoffice.addressCreate',compact('address'));}
        else {
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table=new Adress();
        $table->title=request('title');
        $table->aCountry=request('aCountry');
        $table->aStreet=request('aStreet');
        $table->aNumber=request('aNumber');
        $table->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function show(Adress $adress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
            # code...
        
        $address=Adress::find($id);
        return view('backoffice.addressEdit',compact('address'));}
        else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $address=Adress::find($id);
        $address->title=request('title');
        $address->aCountry=request('aCountry');
        $address->aStreet=request('aStreet');
        $address->aNumber=request('aNumber');
        $address->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table=Adress::find($id);
        $table->delete();
        return redirect()->back();
    }
}
