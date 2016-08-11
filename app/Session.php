<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function schools() {
    	return $this->belongsToMany('App\Schools');
    }
}
