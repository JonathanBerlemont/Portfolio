<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Jonathan',
            'email' => 'berlemontjonathan@gmail.com',  
            'password' => bcrypt('gamepadhack'),  
        ]);
    }
}
