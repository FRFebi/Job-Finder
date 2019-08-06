<?php

use Illuminate\Database\Seeder;

class QualificationVacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qua_vacancy')->insert([
        	'qua_id'		=> '1',
        	'vacancy_id'	=> '1'
        ]);
        DB::table('qua_vacancy')->insert([
        	'qua_id'		=> '2',
        	'vacancy_id'	=> '2'
        ]);
        DB::table('qua_vacancy')->insert([
        	'qua_id'		=> '3',
        	'vacancy_id'	=> '3'
        ]);
        DB::table('qua_vacancy')->insert([
            'qua_id'        => '1',
            'vacancy_id'    => '2'
        ]);
        DB::table('qua_vacancy')->insert([
            'qua_id'        => '3',
            'vacancy_id'    => '2'
        ]);
        DB::table('qua_vacancy')->insert([
            'qua_id'        => '5',
            'vacancy_id'    => '2'
        ]);

    }
}
