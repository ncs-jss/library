<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queries extends Model
{
    protected $fillable = [
        'username','query','reply','subject'
    ];
    protected $hidden = [
        'remember_token'
    ];
    protected $table = 'queries';
}
