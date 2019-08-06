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
        $this->call("TypeSeeder");
        $this->call("ResponsibilitySeeder");
        $this->call("QualificationSeeder");
        $this->call("VacancySeeder");
        $this->call("QualificationVacancySeeder");
        $this->call("PrefferedVacancySeeder");
        $this->call("ResponsibilityVacancySeeder");
        $this->call("DegreeVacancySeeder");
        $this->call("LocationVacancySeeder");
    }
}
