<?php

use Illuminate\Database\Seeder;
use App\Degree;

class DegreeSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 	 
        Degree::create([
        	"name" => "SD"
        ]);
        Degree::create([
        	"name" => "SMP"
        ]);
        Degree::create([
        	"name" => "SMA"
        ]);
        Degree::create([
        	"name" => "S1"
        ]);
        Degree::create([
        	"name" => "S2"
        ]);
    }
}
