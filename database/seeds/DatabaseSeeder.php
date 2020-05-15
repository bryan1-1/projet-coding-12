<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProjectSeeder::class);
        $this->call(SocialSeeder::class);
        $this->call(MapSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(UserSeeder::class);
    }
}
