<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
	public function root(){
		return \View::make('welcome');
	}
    public function login(){
    	return 1;
    }
}
