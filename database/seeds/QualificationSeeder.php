<?php

use Illuminate\Database\Seeder;
use App\Qualification;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Qualification::create([
        	"description" => "Java"
        ]);
        Qualification::create([
        	"description" => "PHP"
        ]);
        Qualification::create([
        	"description" => "MySQL"
        ]);
        Qualification::create([
        	"description" => "Phyton"
        ]);
        Qualification::create([
        	"description" => "Vue"
        ]);
        Qualification::create([
        	"description" => "Angular"
        ]);
        Qualification::create([
        	"description" => "HTML"
        ]);
    }
}
