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
        $this->call(AdminSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(ExperienceSeeder::class);
    }
}
