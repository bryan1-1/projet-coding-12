<?php

namespace App;

use App\Events\NewRegisterEvent;
use Illuminate\Database\Eloquent\Model;


class NewsLetter extends Model
{
    protected $dispatchesEvents = [
        'created' => NewRegisterEvent::class,
    ];
}
