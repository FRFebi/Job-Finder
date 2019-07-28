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
        $this->call("DegreeSeeder");
        $this->call("JobSeeder");
        $this->call("LocationSeeder");
        $this->call("OrganizationSeeder");
        $this->call("SkillSeeder");
        $this->call("TypeSeeder");
        $this->call("VacancySeeder");
        $this->call("DegreeVacancySeeder");
        $this->call("LocationVacancySeeder");
        $this->call("SkillVacancySeeder");
    }
}
