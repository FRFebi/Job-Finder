<?php

use Illuminate\Database\Seeder;

class LocationVacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location_vacancy')->insert([
        	'location_id'		=> '1',
        	'vacancy_id'	=> '1'
        ]);
        DB::table('location_vacancy')->insert([
        	'location_id'		=> '2',
        	'vacancy_id'	=> '2'
        ]);
        DB::table('location_vacancy')->insert([
        	'location_id'		=> '3',
        	'vacancy_id'	=> '3'
        ]);
        DB::table('location_vacancy')->insert([
            'location_id'       => '1',
            'vacancy_id'    => '2'
        ]);
        DB::table('location_vacancy')->insert([
            'location_id'       => '3',
            'vacancy_id'    => '2'
        ]);
        DB::table('location_vacancy')->insert([
            'location_id'       => '4',
            'vacancy_id'    => '2'
        ]);
    }
}
