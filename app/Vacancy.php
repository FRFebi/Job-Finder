<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
	protected $table = "vacancy";

	public function degrees(){
		return $this->belongsToMany('App\Degree','degree_vacancy','vacancy_id','degree_id');
	}
	public function job(){
		return $this->belongsTo('App\Job');
	}
	public function locations(){
		return $this->belongsToMany('App\Location','location_vacancy','vacancy_id','location_id');
	}
	public function organization(){
		return $this->belongsTo('App\Organization');
	}
	public function type(){
		return $this->belongsTo('App\Type');
	}
	public function qualifications(){
		return $this->belongsToMany('App\Qualification','qua_vacancy', 'vacancy_id', 'qua_id');
	}
	public function preffereds(){
		return $this->belongsToMany('App\Qualification','pref_vacancy', 'vacancy_id', 'pref_id');
	}
	public function responsibilities(){
		return $this->belongsToMany('App\Responsibility', 'resp_vacancy','vacancy_id', 'resp_id');
	}
}
