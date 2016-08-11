<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultancy extends Model
{
	 
	public function user() {
		return $this->morphOne('App\User', 'role', 'role', 'id');
	}

	public function schools() {
		return $this->belongsToMany('App\School');
	}
	
	public function students() {
		return $this->hasMany('App\Student');
	}
}
