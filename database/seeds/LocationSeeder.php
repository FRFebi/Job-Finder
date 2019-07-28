<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Location::create([
    		"name" => "Jakarta"
    	]);
    	Location::create([
    		"name" => "Surabaya"
    	]);
    	Location::create([
    		"name" => "Semarang"
    	]);
    	Location::create([
    		"name" => "Jogjakarta"
    	]);
    	Location::create([
    		"name" => "Trenggalek"
    	]);
    }
}
