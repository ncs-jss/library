<?php

namespace App\Http\Controllers;

use App\User;
use App\Queries;
use App\Arrivals; 
use App\Notices;  
use App\Suggestions;
use App\Menu;

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
                return redirect('login');
            }
        }
    }



    public function postQuery(){
        if(\Auth::check())
        {
        $data=Input::all();
        array_pop($data);
        $rules=['username'=>'required', 'query'=>'required', 'subject'=>'required'];
        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return redirect('submit_query')
            ->withErrors($validator->errors())
            ->withInput();
        }else{
            $query= new Queries;
            $query->username = $data['username'];
            $query->subject = $data['subject'];
            $query->query = $data['query'];
            $query->save();
            Session::flash('err',"1");
            return redirect('query');
        }
    }else{
        return redirect('login');
    }
    }



    public function postAddBook(){
        if(\Auth::check())
        {
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
            Session::flash('err',"1");
            return redirect('add_books');
        }
    }else{
        return redirect('login');
    }
    }



    public function postAddNotice(){
        if(\Auth::check())
        {
        $data=Input::all();
        array_pop($data);
        $rules=['notice'=>'required', 'subject'=>'required'];
        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return redirect('add_notice')
            ->withErrors($validator->errors())
            ->withInput();
        }else{
            $notice= new Notices;
            $notice->notice = $data['notice'];
            $notice->subject = $data['subject'];
            $notice->save();
            Session::flash('err',"1");
            return redirect('add_notices');
        }
    }else{
        return redirect('login');
    }
    }



    public function postSuggest(){
        if(\Auth::Check())
        {
        $data=Input::all();
        array_pop($data);

        $rules=['username'=>'required', 
        'title'=>'required',  
        'author'=>'required', 
        'publisher'=>'required', 
        'edition'=>'required', 
        'volume'=>'required', 
        'review'=>'required'];
        
        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return redirect('submit_suggestion')
            ->withErrors($validator->errors())
            ->withInput();
        }else{
            $suggestion= new Suggestions;
            $suggestion->username = $data['username'];
            $suggestion->title = $data['title'];
            $suggestion->author = $data['author'];
            $suggestion->publisher = $data['publisher'];
            $suggestion->edition = $data['edition'];
            $suggestion->volume = $data['volume'];
            $suggestion->review = $data['review'];
            $suggestion->save();
            Session::flash('err',"1");
            return redirect('suggest');
        }
        }else{
            return redirect('login');
        }
    }
    //Debug
    public function postReply($id){
        if(\Auth::check)
        {
        $data = Input::all();
        array_pop($data);

        $validator = Validator::make($data,['reply' => 'required']);

        if($validator->fails()){
            return redirect ('submit_suggestion')
            ->withErrors($validator->errors())
                ->withInput();
        }else{
            $query= Queries::where('id',$id)->first();
            $query->reply = $data['reply'];
            $query->replied = 1;
            $query->save();
            Session::flash('err',"1");
            return redirect('view_query');
        }
        }else{
            return redirect('login');
        }
    }
    // Debug

    public function postNewMenu(){
        if(\Auth::check())
        {
         $data=Input::all();
        array_pop($data);
        $rules=['menu_name'=>'required', 'content'=>'required'];
        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return redirect('add_menu')
            ->withErrors($validator->errors())
            ->withInput();
        }else{
            $menu = new Menu;
            $menu->menuname = $data['menu_name'];
            $menu->content = $data['content'];
            $menu->status = 1;
            $menu->save();
            Session::flash('err',"1");
            return redirect('add_menu');
        }
        }else{
            return redirect('login');
        }
    }
}
