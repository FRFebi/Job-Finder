<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
    		"name" => "Full-Time"
    	]);
    	Type::create([
    		"name" => "Part-Time"
    	]);
    	Type::create([
    		"name" => "Intern"
    	]);
    }
}
