<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notices extends Model
{
    protected $fillable = [
        'id', 'notices','subject'
    ];
    protected $hidden = [
        'created_at','updated_at','remember_token'
    ];
    protected $table = 'notices';	
}
