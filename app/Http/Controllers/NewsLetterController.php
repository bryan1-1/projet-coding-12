<?php

namespace App\Http\Controllers;

use App\Events\NewRegisterEvent;
use App\Events\TestMail;
use App\Listeners\SendWorkEmailListener;
use App\Mail\NewsLetterMail;
use App\NewsLetter;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, NewsLetter $newsLetter)
    {
        $newsLetter= new NewsLetter();
        $newsLetter->email=request('email');
        // $customer = NewsLetter::create($this->validateRequest());
        event(new TestMail($request->email));
        
        
        

        // dump('register to newsletter');
        $newsLetter->save();
       
        return redirect()->route('main');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function show(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsLetter $newsLetter)
    {
        //
    }
}
