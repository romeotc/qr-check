<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //
    protected $fillable = [
        'name', 'lastname','title','groupid','status','sex'
    ];
}
