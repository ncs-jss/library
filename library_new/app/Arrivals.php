<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrivals extends Model
{
    protected $fillable = [
        'book_id','book_name','book_desc'
    ];
    protected $hidden = [
        'remember_token'
    ];
    protected $table = 'new_arrivals';
}
