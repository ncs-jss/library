<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class papers extends Model
{
    protected $fillable = [
         'name','path'
    ];
    protected $hidden = [
        'updated_at','remember_token'
    ];
    protected $table = 'papers';	
}
