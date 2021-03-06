<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'userid','detail', 'line_token', 'facebook_token', 'email'
    ];
    
}