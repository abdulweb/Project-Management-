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
}
