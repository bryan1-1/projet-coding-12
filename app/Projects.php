<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public function work(){
        return $this->hasMany(Work::class);
    }
}
