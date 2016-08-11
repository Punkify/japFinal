<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
	public function user() {
		return $this->morphOne('App\User', 'role', 'role', 'id');
	}

	public function consultancy() {
		return $this->belongsTo('App\Consultancy');
	}

}
