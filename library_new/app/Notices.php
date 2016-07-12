<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notices extends Model
{
    protected $fillable = [
         'notice','subject'
    ];
    protected $hidden = [
        'updated_at','remember_token'
    ];
    protected $table = 'notices';	
}
