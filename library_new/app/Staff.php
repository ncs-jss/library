<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'id', 'name','username','email','phone_no','type','course','branch'
    ];
    protected $hidden = [
        'created_at','updated_at','remember_token'
    ];
    protected $table = 'staff_details';
}
