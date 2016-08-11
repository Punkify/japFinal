<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function user() {
    	return $this->belongsTo('App\User');
    }

    /**
     * @return [App\User]
     */
    public function sender() {
    	return $this->user;
    }

    /**
     * @return [array of App\User]
     */
    public function recipients() {
    	return $this->belongsToMany('App\User', 'message_mapping');
    }

}
