<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
    		"name" => "Programming"
    	]);
    	Skill::create([
    		"name" => "Teaching"
    	]);
    	Skill::create([
    		"name" => "Designing"
    	]);
    }
}
