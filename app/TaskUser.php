<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    //set fillable
    protected $fillable =[
        'user_id',
        'task_id',
    ];
}
