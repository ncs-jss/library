<?php

namespace App\Http\Controllers;

use App\User;
use App\Notices;
use App\Arrivals;
use App\Queries;
use App\Suggestions;

use Session;
use Validator;
use Redirect;
use Auth;


use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	public function getIndex(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('index')
        ->with('username',$user->username)
        ->with('level',$user->level);
        }else{
        return view('index')
        ->with('username',"Guest")
        ->with('level',3);
        }
    }
	

    public function getLogin(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return Redirect::back();
        }else{
            if(Session::get('err') == '1')
            {
                return view('admin-login',['err'=>"Username Or Password did not match."])
                ->with('username',"Guest")
                ->with('level',3);;
            }else{
    	        return view('admin-login')
                ->with('err',"")
                ->with('username',"Guest")
                ->with('level',3);
            }
        }
    }
    public function getArrivals(){
        $arrivals=Arrivals::Orderby('id','des')->get();
        $id=1;
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('new-arrivals',['arrivals' => $arrivals,
            'id'=>$id])
            ->with('username',$user->username)
            ->with('level',$user->level);        
        }else{
        return view('new-arrivals',['arrivals' => $arrivals,
            'id'=>$id])
            ->with('username',"Guest")
            ->with('level',3);
        }
    }

    public function getNotices(){
        $notices=Notices::Orderby('id','des')->get();
        $id=1;
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('notices',['notices' => $notices,
            'id'=>$id])
            ->with('username',$user->username)
            ->with('level',$user->level);
        }else{
        return view('notices',['notices' => $notices,
            'id'=>$id])
            ->with('username',"Guest")
            ->with('level',3);
        }
    }


    
    public function getServices(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('services')
        ->with('username',$user->username)
        ->with('level',$user->level);
        }else{
        return view('services')
        ->with('username',"Guest")
        ->with('level',3);
        }
    }

    
    public function getContact(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('contact')
        ->with('username',$user->username)
        ->with('level',$user->level);
        }else{
        return view('contact')
        ->with('username',"Guest")
        ->with('level',3);
        }
    }

    public function getResources(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('e-resources')
        ->with('username',$user->username)
        ->with('level',$user->level);
        }else{
        return view('e-resources')
        ->with('username',"Guest")
        ->with('level',3);
        }
    }

    public function getExternalLinks(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('external-links')
        ->with('username',$user->username)
        ->with('level',$user->level);
        }else{
        return view('external-links')
        ->with('username',"Guest")
        ->with('level',3);
        }
    }

     

     public function getNotFound(){
        return view('errors.404');
    }

     

    public function getNotice($id)
    {
        $notice = Notices::where('id',$id)->get()[0]->notice;   
        $subject = Notices::where('id',$id)->get()[0]->subject;
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('view_notice',['subject' => $subject, 
            'notice' => $notice])
            ->with('username',$user->username)
            ->with('level',$user->level);
        }else{
        return redirect('login');
        }  
    }

    

    public function getViewBook($id){
        $book = Arrivals::where('id',$id)->get()[0]->book_name;
        $book_id = Arrivals::where('id',$id)->get()[0]->book_id;
        $book_desc = Arrivals::where('id',$id)->get()[0]->book_desc;
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('view_book',['book' => $book, 
            'book_id' => $book_id,
            'book_desc' => $book_desc])
            ->with('username',$user->username)
            ->with('level',$user->level);
        }else{
            return redirect('login');        
        }
    }

    public function getUserQueries(){
        $queries = Queries::where('username', Session::get('username'))->get();
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('user_queries')
        ->with('username',$user->username)
        ->with('level',$user->level)
        ->with('queries',$queries);
        }else{
        return redirect('login');
        }
    }


    public function getQuery(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
            if(Session::get('err') == '1')
            {
                return view('query',['err'=>"Your Query has been submitted successfully. Thank You!!"])
                ->with('username',$user->username)
                ->with('level',$user->level);
            }else{
                return view('query')
                ->with('err',"")
                ->with('username',$user->username)
                ->with('level',$user->level);
            }
        }else{
        return redirect('login');
        }
    }

    public function getSuggest(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
         if(Session::get('err') == '1'){
            return view('suggest',['err'=>"Your suggestion has been submitted."])
            ->with('username',$user->username)
            ->with('level',$user->level);
         }else{
            return view('suggest')
            ->with('err',"")
            ->with('username',$user->username)
            ->with('level',$user->level);
         }
        }else{
        return redirect('login');
        }
    }


    public function logout(){
        \Auth::logout();
        session_unset();
        return redirect('/');
    }

}
