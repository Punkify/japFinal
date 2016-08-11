<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    public function user() {
        return $this->morphOne('App\User', 'role', 'role', 'id');
    }

    public function consultancies() {
    	return $this->belongsToMany('App\Consultancy');
    }

    public function payments() {
    	return $this->hasMany('App\Payments');
    }

    public function applications() {
        return $this->hasManyThrough('App\Application', 'App\SchoolSession');
    }

    public function sessions() {
    	return $this->belongsToMany('App\Session');
    }


}
