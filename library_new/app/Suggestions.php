<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestions extends Model
{
    protected $fillable = [
         'username','title','author','publisher','edition','volume','review'
    ];
    protected $hidden = [
        'remember_token'
    ];
    protected $table = 'suggestions';
}
