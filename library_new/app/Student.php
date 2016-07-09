<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
         'name','username','email','phone_no','admission_year','course','branch'
    ];
    protected $hidden = [
        'remember_token'
    ];
    protected $table = 'student_details';
}
