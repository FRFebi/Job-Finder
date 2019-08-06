<?php

use Illuminate\Database\Seeder;
use App\Responsibility;

class ResponsibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Responsibility::create([
    		"description" => "Design"
    	]);
    	Responsibility::create([
    		"description" => "Develop"
    	]);
    	Responsibility::create([
    		"description" => "Testing"
    	]);
    	Responsibility::create([
    		"description" => "Deploy"
    	]);
    	Responsibility::create([
    		"description" => "Maintain"
    	]);
    	Responsibility::create([
    		"description" => "Manage time"
    	]);
    }
}
