<?php

use Illuminate\Database\Seeder;

class DegreeVacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('degree_vacancy')->insert([
        	'degree_id'		=> '1',
        	'vacancy_id'	=> '1'
        ]);
        DB::table('degree_vacancy')->insert([
        	'degree_id'		=> '2',
        	'vacancy_id'	=> '2'
        ]);
        DB::table('degree_vacancy')->insert([
        	'degree_id'		=> '3',
        	'vacancy_id'	=> '3'
        ]);
    }
}
