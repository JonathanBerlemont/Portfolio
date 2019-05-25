<?php

use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('experiences')->insert([
            'years' => 'December 2018 - June 2019',
            'job' => 'Full Stack Web Developer',
            'where' => 'Molengeek',
            'description' => 'I have been working at Molengeek as a Full Stack Web Developer for 6 months during which i learned a lot of various technologies such as Laravel or Vue.js and of course the basics to make websites.'
        ]);
        \DB::table('experiences')->insert([
            'years' => '2016 - 2018',
            'job' => 'Student',
            'where' => 'University of Brussels',
            'description' => 'Learning the basics of Python, Java, C#, C++, etc'
        ]);
    }
}
