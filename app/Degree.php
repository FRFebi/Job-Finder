<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
	protected $table = "degree";

    public function vacancies(){
    	return $this->belongsToMany('App\Vacancy','degree_vacancy', 'degree_id', 'vacancy_id');
    }
}
