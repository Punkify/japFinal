<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function student() {
    	return $this->belongsTo('App\Student');
    }
}
