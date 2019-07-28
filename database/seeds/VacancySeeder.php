<?php

use Illuminate\Database\Seeder;
use App\Vacancy;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vacancy::create([
    		"job_id" => 1,
    		"organization_id" => 1,
    		"type_id" => 1,
    	]);
    	Vacancy::create([
    		"job_id" => 2,
    		"organization_id" => 2,
    		"type_id" => 2,
    	]);
    	Vacancy::create([
    		"job_id" => 3,
    		"organization_id" => 3,
    		"type_id" => 3,
    	]);

    }
}
