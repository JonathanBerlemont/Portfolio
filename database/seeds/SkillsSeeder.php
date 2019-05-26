<?php

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('skills')->insert([
            'name' => 'PHP',
            'image' => 'php.png', 
            'percentage' => 80,
            'priority' => 1,
            'type' => 'language'
        ]);
        \DB::table('skills')->insert([
            'name' => 'HTML',
            'image' => 'html.png',
            'percentage' => 100,
            'priority' => 3,
            'type' => 'language'
        ]);
        \DB::table('skills')->insert([
            'name' => 'JavaScript',
            'image' => 'js.png',
            'percentage' => 55,
            'priority' => 2,
            'type' => 'language'
        ]);
        \DB::table('skills')->insert([
            'name' => 'CSS',
            'image' => 'css.png',
            'percentage' => 95,
            'priority' => 3,
            'type' => 'language'
        ]);
        \DB::table('skills')->insert([
            'name' => 'Laravel',
            'image' => 'laravel.png',
            'percentage' => 80,
            'priority' => 1,
            'type' => 'language' 
        ]);
        \DB::table('skills')->insert([
            'name' => 'SQL',
            'image' => 'sql.png',
            'percentage' => 70,
            'priority' => 1,
            'type' => 'language' 
        ]);
        \DB::table('skills')->insert([
            'name' => 'Bootstrap',
            'image' => 'bootstrap.png',
            'percentage' => 90,
            'priority' => 2,
            'type' => 'language' 
        ]);
        \DB::table('skills')->insert([
            'name' => 'SASS',
            'image' => 'sass.png',
            'percentage' => 90,
            'priority' => 3,
            'type' => 'language' 
        ]);
        \DB::table('skills')->insert([
            'name' => 'PhpMyAdmin',
            'image' => 'phpmyadmin.png',
            'percentage' => 85,
            'priority' => 2,
            'type' => 'technology' 
        ]);
        \DB::table('skills')->insert([
            'name' => 'Github',
            'image' => '',
            'percentage' => 95,
            'priority' => 2,
            'type' => 'technology' 
        ]);
    }
}
