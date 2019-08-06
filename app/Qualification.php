<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $table = "qualifications";

    public function quaVacancies(){
    	return $this->belongsToMany('App\Vacancy', 'qua_vacancy', 'qua_id','vacancy_id'); 
    }
    public function prefVacancies(){
    	return $this->belongsToMany('App\Vacancy', 'pref_vacancy', 'pref_id','vacancy_id'); 
    }
}
