<?php

namespace App\Http\Controllers;

use App\User;
use App\Queries;
use App\Arrivals;

use Session;
use Validator;
use Redirect;
use Auth;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
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
                session_unset();
                Session::put('username',$data['username']);
                Session::save();
                return redirect('/');
            }else{
                Session::flash('err',"1");
                return view('admin-login',['err'=>"Username Or Password did not match."]);
            }
        }
    }

    public function postQuery(){
        $data=Input::all();
        array_pop($data);
        $rules=['username'=>'required', 'query'=>'required', 'subject'=>'required'];
        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return redirect('query')
            ->withErrors($validator->errors())
            ->withInput();
        }else{
            $query= new Queries;
            $query->username = $data['username'];
            $query->subject = $data['subject'];
            $query->query = $data['query'];
            $query->save();
            return view('query',['err'=>"Your Query has been submitted successfully. Thank You!!"]);
        }
    }

    public function postAddBook(){
        $data=Input::all();
        array_pop($data);
        $rules=['book_id'=>'required', 'book_name'=>'required', 'book_desc'=>'required'];
        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return redirect('add_book')
            ->withErrors($validator->errors())
            ->withInput();
        }else{
            $arrival= new Arrivals;
            $arrival->book_id = $data['book_id'];
            $arrival->book_name = $data['book_name'];
            $arrival->book_desc = $data['book_desc'];
            $arrival->save();
            return view('add_book',['err'=>"The book has been added to the list."]);
        }
    }
}
