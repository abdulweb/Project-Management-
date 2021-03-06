<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'first_name', 
        'middle_name', 
        'last_name',
        'city', 
        'role_id',
    ];
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relationship
    public function tasks(){
        return $this->belongToMany('App\Task');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function roles(){
        return $this->belongTo('App\Role');
    }

    public function companies(){
        return $this->hasMany('App\Company');
    }

    public function projects(){
        return $this->belongToMany('App\Project');
    }
}
