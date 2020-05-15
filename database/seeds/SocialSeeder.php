<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            "name"=>"fab fa-facebook-f",
        ]);
        DB::table('socials')->insert([
            "name"=>"fab fa-twitter",
            
        ]);
        DB::table('socials')->insert([
            "name"=>"fab fa-instagram-square"
        ]);
        DB::table('socials')->insert([
            "name"=>"fab fa-linkedin-in"
        ]);
        DB::table('socials')->insert([
            "name"=>"fab fa-google"
        ]);
        DB::table('socials')->insert([
            "name"=>"fab fa-pinterest-square"
        ]);
    }
}
