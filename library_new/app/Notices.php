<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notices extends Model
{
    protected $fillable = [
         'notices','subject'
    ];
    protected $hidden = [
        'updated_at','remember_token'
    ];
    protected $table = 'notices';	
}
