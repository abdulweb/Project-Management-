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
        return $this->belongTo('App\Models\User');
    }

    public function projects(){
        return $this->belongTo('App\Models\Project');
    }

    public function companies(){
        return $this->belongTo('App\Models\Company');
    }
}
