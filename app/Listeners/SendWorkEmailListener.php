<?php

namespace App\Listeners;

use App\Events\NewRegisterEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsLetterMail;
use App\NewsLetter;
class SendWorkEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  NewRegisterEvent  $event
     * @return void
     */
    public function handle(NewRegisterEvent $event)
    {
         dd($event);
        //  Mail::to($event->customer)->send(new NewsLetterMail());

         Mail::to($event->newsLetter->email)->send(
            new NewsLetterMail($event->newsLetter)
         );
         $newsLetter = newsLetter::find($event->newsLetter)->toArray();
         Mail::send('emails.news', $newsLetter, function($message) use ($newsLetter) {
             $message->to($newsLetter['email']);
            $message->subject('Event Testing');
         });
        //  dd($newsLetter);
        // dump('hello');
    }
}
