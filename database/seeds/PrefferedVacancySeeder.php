<?php

use Illuminate\Database\Seeder;

class PrefferedVacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pref_vacancy')->insert([
        	'pref_id'		=> '4',
        	'vacancy_id'	=> '1'
        ]);
        DB::table('pref_vacancy')->insert([
        	'pref_id'		=> '2',
        	'vacancy_id'	=> '2'
        ]);
        DB::table('pref_vacancy')->insert([
        	'pref_id'		=> '6',
        	'vacancy_id'	=> '3'
        ]);

        DB::table('pref_vacancy')->insert([
            'pref_id'       => '3',
            'vacancy_id'    => '2'
        ]);
    }
}
