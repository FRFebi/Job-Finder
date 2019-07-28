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
	public function skills(){
		return $this->belongsToMany('App\Skill','skill_vacancy','vacancy_id','skill_id');
	}
	public function type(){
		return $this->belongsTo('App\Type');
	}
}
