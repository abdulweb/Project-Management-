<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //set fillable
    protected $fillable =[
        'name',
        'project_id',
        'user_id',
        'company_id',
        'hours',
        'days',
    ];

    public function users(){
        return $this->belongToMany('App\User');
    }

    public function projects(){
        return $this->belongTo('App\Project');
    }

    public function companies(){
        return $this->belongTo('App\Company');
    }
}
