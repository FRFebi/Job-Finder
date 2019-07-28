<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $table = "job";
 public function vacancies(){
 	return $this->hasMany('App\Vacancy');
 }
}
