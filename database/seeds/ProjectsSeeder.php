<?php

use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('projects')->insert([
            'title' => 'Labs',
            'most_used_language' => 'Laravel / PHP',
            'image' => 'labs.PNG',
            'time_taken' => 2,
            'github' => 'https://github.com/JonathanBerlemont/Labs'
        ]);
        \DB::table('projects')->insert([
            'title' => 'Portfolio',
            'most_used_language' => 'Laravel / PHP',
            'image' => '1558800242.PNG',
            'time_taken' => 1,
            'github' => 'https://github.com/JonathanBerlemont/Portfolio'
        ]);
    }
}
