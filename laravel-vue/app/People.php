<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //
    public $table = 'peoples';
    protected $fillable = [
        'name', 'lastname','groupid','status','sex','detail','rfid','peopleid','title','track_status'
    ];
}
