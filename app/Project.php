<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //set fillable
    protected $fillable =[
        'name',
        'description',
        'company_id',
        'user_id',
        'days',
    ];

    public function users(){
        return $this->belongTo('App\Models\User');
    }

    public function comapnies(){
        return $this->belongTo('App\Models\Company');
    }
}
