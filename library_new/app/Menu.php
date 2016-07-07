<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'id', 'menuname','content'
    ];
    protected $hidden = [
        'created_at','updated_at','remember_token'
    ];
}
