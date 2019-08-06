<?php

use Illuminate\Database\Seeder;

class ResponsibilityVacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resp_vacancy')->insert([
        	'resp_id'		=> '1',
        	'vacancy_id'	=> '1'
        ]);
        DB::table('resp_vacancy')->insert([
        	'resp_id'		=> '2',
        	'vacancy_id'	=> '1'
        ]);
        DB::table('resp_vacancy')->insert([
        	'resp_id'		=> '3',
        	'vacancy_id'	=> '1'
        ]);
        DB::table('resp_vacancy')->insert([
        	'resp_id'		=> '1',
        	'vacancy_id'	=> '2'
        ]);
        DB::table('resp_vacancy')->insert([
        	'resp_id'		=> '2',
        	'vacancy_id'	=> '2'
        ]);
        DB::table('resp_vacancy')->insert([
        	'resp_id'		=> '3',
        	'vacancy_id'	=> '2'
        ]);
        DB::table('resp_vacancy')->insert([
            'resp_id'       => '4',
            'vacancy_id'    => '2'
        ]);
        DB::table('resp_vacancy')->insert([
            'resp_id'       => '5',
            'vacancy_id'    => '2'
        ]);
    }
}
