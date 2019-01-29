<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //set fillable
    protected $fillable =[
        'body',
        'url',
        'commentable_id',
        'commentable_type',
        'user_id',
    ];
}
