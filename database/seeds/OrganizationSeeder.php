<?php

use Illuminate\Database\Seeder;
use App\Organization;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Organization::create([
    		"name" => "Telekomunikasi Indonesia"
    	]);
    	Organization::create([
    		"name" => "Telkomsel"
    	]);
    	Organization::create([
    		"name" => "Telkom Sigma"
    	]);
    }
}
