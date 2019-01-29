<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     //set fillable
     protected $fillable =[
        'name',
    ];

    //Relationship
    public function users(){
        return $this->hasMany('App\User');
    }
}
