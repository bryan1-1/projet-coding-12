<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Features;
use Illuminate\Support\Facades\DB;

class Pagination extends Controller
{
    function list()
    {
        $page= DB::table('intros')->paginate(2);
        //  $page=DB::table('feature')->paginate(3);
         return view('test',['data'=>$page]);
    }
}
