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

class AdminPagesController extends Controller{

	public function getAddBook(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        if($user->level==0)
        {
            if(Session::get('err') == '1')
            {
                return view('add_book',['err'=>"The book has been added to the list."])
                ->with('username',$user->username)
                ->with('level',$user->level)->with('err',"");
            }else{
                return view('add_book')
                ->with('username',$user->username)
                ->with('level',$user->level)->with('err',"");
            }
        }else{
            return redirect('/');
        }
        }else{
            return redirect('login');
        }
     }


	public function getAddNotice(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        if($user->level==0){
            if(Session::get('err') == '1'){
                return view('add_notice',['err'=>"The notice has been uploaded."])
                ->with('username',$user->username)
                ->with('level',$user->level);
            }else{
                return view('add_notice')
                ->with('err',"")
                ->with('username',$user->username)
                ->with('level',$user->level);
        }
        }else{
            return redirect('/');   
        }
        }else{
            return redirect('login');
        }
     }


	public function getViewQueries(){
        $queries=Queries::Orderby('id','des')->get();
        $id=1;

        if(\Auth::Check()){
        	$user = User::where('username', Session::get('username'))->first();
        	if($user->level == 0){
        		return view('queries',['queries' => $queries,
           		'id'=>$id])
            	->with('username',$user->username)
            	->with('level',$user->level);
            }else{
            	return redirect('/');
            }
        }else{
        	return redirect('login');
        }
    }


	public function getSuggestions(){
        $suggestions=Suggestions::Orderby('id','des')->get();
        $id=1;
        if(\Auth::Check()){
        	$user = User::where('username', Session::get('username'))->first();
        	if($user->level == 0){
        		return view('suggestions',['suggestions' => $suggestions,
            	'id'=>$id])
            	->with('username',$user->username)
            	->with('level',$user->level);
        	}else{
        		return redirect('/');
        	}
        }else{
        	return redirect('login');
        }
    }


	public function getViewSuggestion($id){
		if(\Auth::Check()){
        	$title = Suggestions::where('id',$id)->get()[0]->title;
        	$author = Suggestions::where('id',$id)->get()[0]->author;
       		$publisher = Suggestions::where('id',$id)->get()[0]->publisher;
        	$edition = Suggestions::where('id',$id)->get()[0]->edition;
        	$volume = Suggestions::where('id',$id)->get()[0]->volume;
        	$review = Suggestions::where('id',$id)->get()[0]->review;
        	$user = User::where('username', Session::get('username'))->first();
        	if($user->level == 0){        	
        		return view('view_suggestion',['title' => $title, 
            		'author' => $author, 
            		'publisher' => $publisher, 
            		'edition' => $edition, 
            		'volume' => $volume, 
            		'review' => $review])
            		->with('username',$user->username)
            		->with('level',$user->level);
            }else{
            	return redirect('/');
           	}
        }else{
        	return redirect('login');
        }
    }

	public function getViewQuery($id){
        $query = Queries::where('id',$id)->get()[0]->query;   
        $subject = Queries::where('id',$id)->get()[0]->subject;
        if(\Auth::Check()){
        	$user = User::where('username', Session::get('username'))->first();
        	if($user->level == 0){
        		return view('view_query',['subject' => $subject, 
            	'query' => $query])
                ->with('err',"")
        	    ->with('username',$user->username)
            	->with('level',$user->level);
        	}else{
        		return redirect('/');
        	}
        }else{
        	return redirect('login');
        }
    }

	public function getAddMenu(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        if($user->level == 0){
            return view('add_menu')
            ->with('err',"")
            ->with('username',$user->username)
            ->with('level',$user->level);
            }else{
                return redirect('/');
            }        
        }else{
        return redirect('login');
        }
    }
}