<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	protected $table = "location";

	public function vacancies(){
		return $this->belongsToMany('App\Vacancy', 'location_vacancy', 'location_id', 'vacancy_id');
	}
}
