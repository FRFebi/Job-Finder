<?php

use Illuminate\Database\Seeder;
use App\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
        	"name" => "Designer"
        ]);
        Job::create([
        	"name" => "Data Analyst"
        ]);
        Job::create([
        	"name" => "Business Analyst"
        ]);
        Job::create([
        	"name" => "Data Mining"
        ]);
        Job::create([
        	"name" => "Data Scientists"
        ]);
    }
}
