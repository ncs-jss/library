<?php

namespace App\Http\Controllers;

use App\User;


use Session;
use Validator;
use Redirect;
use Auth;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{

    public function postLogin(){
    	$data = Input::all();
        array_pop($data);
        $rules = ['username'=>'required',
        'password'=> 'required'];

        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            return redirect('login')
            ->withErrors($validator->errors())
            ->withInput();
        }
        else{
            if(\Auth::attempt($data)){
                /*session_unset();
                Session::put('username',$data['username']);
                Session::save();
                return redirect('home');*/print_r($data);
            }else{/*
                Session::flash('err',"1");
                return redirect('contact');
            */echo"sorry mate";}
        }
    }
}
