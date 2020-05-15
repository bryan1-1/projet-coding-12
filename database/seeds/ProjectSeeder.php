<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('projects')->insert([
                "name"=>"branding"
            ]);
            DB::table('projects')->insert([
                "name"=>"web"
            ]);
            DB::table('projects')->insert([
                "name"=>"logo-design"
            ]);
            DB::table('projects')->insert([
                "name"=>".photography"
            ]);
        }
    
}
