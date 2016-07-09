<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
         'name','username','email','phone_no','type','course','branch'
    ];
    protected $hidden = [
        'remember_token'
    ];
    protected $table = 'staff_details';
}
