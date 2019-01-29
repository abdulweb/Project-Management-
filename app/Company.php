<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //set fillable
    protected $fillable =[
        'name',
        'description',
        'user_id',
    ];
}