<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    protected $table = "responsibilities";

    public function vacancies(){
    	return $this->belongsToMany('App\Vacancy', 'resp_vacancy', 'resp_id','vacancy_id'); 
    }
}
