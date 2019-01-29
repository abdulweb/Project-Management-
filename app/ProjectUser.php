<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    //set fillable
    protected $fillable =[
        'user_id',
        'project_id',
    ];
}
