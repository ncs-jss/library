<?php

namespace App\Http\Controllers;

use App\User;
use App\Queries;
use App\Arrivals; 
use App\Notices;  
use App\Suggestions;
use App\Menu;
use App\Papers;
use App\Student;
use App\Staff;

use Session;
use Validator;
use Auth;
use Mail;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class UserController extends Controller
{

    public function postLogin(){
    	$data = Input::all();
        array_pop($data);
        $rules = ['username'=>'required',
        'password'=> 'required'];

        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            return Redirect::back()
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
            return Redirect::back()
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
            return Redirect::back()
            ->withErrors($validator->errors())
            ->withInput();
        }else{
            $arrival= new Arrivals;
            $arrival->book_id = $data['book_id'];
            $arrival->book_name = $data['book_name'];
            $arrival->book_desc = $data['book_desc'];
            $arrival->save();

            if($data['mail'] == 0){
                $staffs=Staff::Orderby('id','des')->get();
                
                foreach($staffs as $staff){
                    $email = $staff->email;
                    $name = $staff->name;
                    echo $email." ".$name;
                    Mail::send('mail.mail', array('name'=> $staff->name,'book_name' => $data['book_name']), function($message){
                    $message->to($GLOBALS['email'],$GLOBALS['name'])->subject('Library Notification');});
                }

            }elseif ($data['mail'] == 1) {
                $students=Student::Orderby('id','des')->get();

                foreach($students as $student){
                    Mail::send('mail.mail', array('name'=> $student->name,'book_name' => $data['book_name']), function($message){
                    $message->to($GLOBALS[$student->email], $GLOBALS[$student->name])->subject('Library Notification');});
                }

            }else{
                $staffs=Staff::Orderby('id','des')->get();
                
                foreach($staffs as $staff){
                    Mail::send('mail.mail', array('name'=> $staff->name,'book_name' => $data['book_name']), function($message){
                    $message->to($GLOBALS[$staff->email],$GLOBALS[$staff->name])->subject('Library Notification');});
                }
                
                $students=Student::Orderby('id','des')->get();
                
                foreach($students as $student){
                    Mail::send('mail.mail', array('name'=> $student->name,'book_name' => $data['book_name']), function($message){
                    $message->to($GLOBALS[$student->email],$GLOBALS[$student->name])->subject('Library Notification');});
                }
            } 
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
            return Redirect::back()
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
            return Redirect::back()
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


    public function postReply($id){
        if(\Auth::check())
        {
        $data = Input::all();
        array_pop($data);

        $validator = Validator::make($data,['reply' => 'required']);

        if($validator->fails()){
            return Redirect::back()
            ->withErrors($validator->errors())
                ->withInput();
        }else{
            $query= Queries::where('id',$id)->first();
            $query->reply = $data['reply'];
            $query->replied = 1;
            $query->save();
            return redirect('queries');
        }
        }else{
            return redirect('login');
        }
    }

    public function postNewMenu(){
        if(\Auth::check())
        {
         $data=Input::all();
        array_pop($data);
        $rules=['menu_name'=>'required', 'content'=>'required'];
        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return Redirect::back()
            ->withErrors($validator->errors())
            ->withInput();
        }else{
            $menu = new Menu;
            $menu->menuname = $data['menu_name'];
            $menu->content = $data['content'];
            $menu->status = 1;
            $menu->save();
            return redirect('view_menus');
        }
        }else{
            return redirect('login');
        }
    }


    public function postEditMenu($id){
        if(\Auth::check())
        {
         $data=Input::all();
        array_pop($data);
        $rules=['menu_name'=>'required', 'content'=>'required'];
        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return Redirect::back()
            ->withErrors($validator->errors())
            ->withInput();
        }else{
            $menu=Menu::where('id',$id)->first();
            $menu->menuname = $data['menu_name'];
            $menu->content = $data['content'];
            $menu->status = $data['status'];
            $menu->save();
            return redirect('view_menus');
        }
        }else{
            return redirect('login');
        }
    }

    public function postAddPaper(){
        if(\Auth::Check())
        {
            // var_dump(Input::get('file'));
        $data=Input::all();
        array_pop($data);

        $rules=['subject'=>'required', 
        'year'=>'required',  
        'semester'=>'required'];
        // print_r(($data));
        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return Redirect::back()
            ->withErrors($validator->errors())
            ->withInput();
            
        }else{
            // print_r(Input::hasFile('file'));
            $paper = new Papers;
            if (Input::hasFile('file')) 
                if(Input::file('file')->isValid()) {
                // echo "c";
                $destinationPath = 'papers'; // upload path
                $extension = Input::file('file') -> getClientOriginalExtension(); // getting image extension
                // print_r($extension);
                if($extension == 'pdf'){
                $fileName = $data['subject'].'_'.$data['year'].'_'.$data['semester'].'.'.$extension; // renameing image
                Input::file('file')->move($destinationPath, $fileName); // uploading file to given path
                $paper->name = $fileName;
                $path->path = $destinationPath;
            }}

            $paper->save();
            Session::flash('err',"1");
            return redirect('view_papers');
        }
        }else{
            return redirect('login');
        }
    }
}
