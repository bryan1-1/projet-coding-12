<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function project(){
        return $this->belongsTo('App\Projects','projects_id','id');
    }
}
