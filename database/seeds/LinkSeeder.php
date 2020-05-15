<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert([
            "name"=>"inside us",
            "link"=>"127.0.0.1:8000/"
        ]);
        DB::table('links')->insert([
            "name"=>"flickr",
            "link"=>"https://www.flickr.com/"
        ]);
        DB::table('links')->insert([
            "name"=>"google +",
            "link"=>"https://support.google.com/plus/?hl=fr#topic=9259565"
        ]);
        DB::table('links')->insert([
            "name"=>"Forum",
            "link"=>"#"
        ]);
    }
}
