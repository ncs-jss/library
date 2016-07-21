<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
         'menuname','content','status'
    ];
    protected $hidden = [
        'remember_token'
    ];
    protected $table = 'custom_menu';
}
