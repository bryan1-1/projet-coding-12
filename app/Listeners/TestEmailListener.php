<?php

namespace App\Listeners;


use App\Work;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\TestMail;

class TestEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TestMail  $event
     * @return void
     */
    public function handle(TestMail $event)
    {
        $work=Work::all();
        Mail::to($event->NewsLetter)->send(new \App\Mail\TestMail($work) );
       
    }
}
