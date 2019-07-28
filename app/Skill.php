<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	protected $table = "skill";

	public function vacancies(){
		return $this->belongsToMany('App\Vacancy','skill_vacancy', 'skill_id', 'vacancy_id');
	}
}
