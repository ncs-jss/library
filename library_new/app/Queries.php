<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queries extends Model
{
    protected $fillable = [
        'id','username','query','reply','subject'
    ];
    protected $hidden = [
        'created_at','updated_at','remember_token'
    ];
}
