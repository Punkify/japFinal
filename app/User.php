<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function activities() {
        return $this->hasMany('App\Activity');
    }

    public function role() {
        return $this->morphTo('role');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function documents() {
        return $this->hasMany('App\Document');
    }

    public function messages() {
        return $this->hasMany('App\Message');
    }

    public function messageMapping() {
        return $this->hasMany('App\MessageMapping');
    }

    /**
     * @return [array]
     */
    public function sentMessages() {
        return $this->messages()->get()->all();
    }

    /**
     * @return [array]
     */
    public function receivedMessages() {
        return $this->messageMapping()->get()->all();
    }
}
