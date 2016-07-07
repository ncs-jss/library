<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrivals extends Model
{
    protected $fillable = [
        'id', 'book_id','book_name','book_desc'
    ];
    protected $hidden = [
        'created_at','updated_at','remember_token'
    ];
    protected $table = 'new_arrivals';
}
