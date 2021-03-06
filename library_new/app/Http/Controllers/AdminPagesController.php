<?php

namespace App\Http\Controllers;

use App\User;
use App\Notices;
use App\Arrivals;
use App\Queries;
use App\Suggestions;
use App\Menu;
use App\Papers;

use Session;
use Validator;
use Redirect;
use Auth;


use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPagesController extends Controller{

	public function getAddBook(){
        $menu=Menu::Orderby('id','des')->get();
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        if($user->level==0)
        {
            if(Session::get('err') == '1')
            {
                return view('add_book',['err'=>"The book has been added to the list."])
                ->with('username',$user->username)
                ->with('level',$user->level)
                ->with('menu',$menu);
            }else{
                return view('add_book')
                ->with('username',$user->username)
                ->with('level',$user->level)->with('err',"")
                ->with('menu',$menu);
            }
        }else{
            return redirect('/');
        }
        }else{
            return redirect('login');
        }
     }


	public function getAddNotice(){
        $menu=Menu::Orderby('id','des')->get();
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        if($user->level==0){
            if(Session::get('err') == '1'){
                return view('add_notice',['err'=>"The notice has been uploaded."])
                ->with('username',$user->username)
                ->with('level',$user->level)
                ->with('menu',$menu);
            }else{
                return view('add_notice')
                ->with('err',"")
                ->with('username',$user->username)
                ->with('level',$user->level)
                ->with('menu',$menu);
        }
        }else{
            return redirect('/');   
        }
        }else{
            return redirect('login');
        }
     }


	public function getViewQueries(){
        $menu=Menu::Orderby('id','des')->get();
        $queries=Queries::Orderby('id','des')->get();
        $id=1;

        if(\Auth::Check()){
        	$user = User::where('username', Session::get('username'))->first();
        	if($user->level == 0){
        		return view('queries',['queries' => $queries,
           		'id'=>$id])
            	->with('username',$user->username)
            	->with('level',$user->level)
                ->with('menu',$menu);
            }else{
            	return redirect('/');
            }
        }else{
        	return redirect('login');
        }
    }


	public function getSuggestions(){
        $menu=Menu::Orderby('id','des')->get();
        $suggestions=Suggestions::Orderby('id','des')->get();
        $id=1;
        if(\Auth::Check()){
        	$user = User::where('username', Session::get('username'))->first();
        	if($user->level == 0){
        		return view('suggestions',['suggestions' => $suggestions,
            	'id'=>$id])
            	->with('username',$user->username)
            	->with('level',$user->level)
                ->with('menu',$menu);
        	}else{
        		return redirect('/');
        	}
        }else{
        	return redirect('login');
        }
    }


	public function getViewSuggestion($id){
        $menu=Menu::Orderby('id','des')->get();
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
            		->with('level',$user->level)
                    ->with('menu',$menu);
            }else{
            	return redirect('/');
           	}
        }else{
        	return redirect('login');
        }
    }

	public function getViewQuery($id){
        $menu=Menu::Orderby('id','des')->get();
        $query = Queries::where('id',$id)->get()[0]->query;   
        $subject = Queries::where('id',$id)->get()[0]->subject;
        $user = User::where('username', Session::get('username'))->first();
        if(\Auth::Check()){
        	if($user->level == 0){
                if(Session::get('err') == '1'){
        		  return redirect('queries');
                }else{
                    return view('view_query',['subject' => $subject, 
                   'query' => $query, 
                   'id' => $id])
                   ->with('username',$user->username)
                   ->with('level',$user->level)
                   ->with('menu',$menu);
                }
        	}else{
        		return redirect('/');
        	}
        }else{
        	return redirect('login');
        }
    }

	public function getAddMenu(){
        $menu=Menu::Orderby('id','des')->get();
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        if($user->level == 0){
            if(Session::get('err') == '1'){
                return view('add_menu')
                ->with('err',"New Menu Created")
                ->with('username',$user->username)
                ->with('level',$user->level)
                ->with('menu',$menu);
            }else{
                return view('add_menu')
                ->with('err',"")
                ->with('username',$user->username)
                ->with('level',$user->level)
                ->with('menu',$menu);
            }
        }else{
                return redirect('/');
            }        
        }else{
            return redirect('login');
        }
    }

    public function getViewMenu(){
        $menu=Menu::Orderby('id','des')->get();
        $id=1;
        if(\Auth::Check()){
            $user = User::where('username', Session::get('username'))->first();
            if($user->level  == 0){
                return view('menus')
                ->with('id',$id)
                ->with('username',$user->username)
                ->with('level',$user->level)
                ->with('menu',$menu);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('login');
        }
    }

    public function getEditMenu($id){
        $menu=Menu::Orderby('id','des')->get();
        $menuname = Menu::where('id',$id)->get()[0]->menuname;   
        $content = Menu::where('id',$id)->get()[0]->content;
        $status = Menu::where('id',$id)->get()[0]->status;
        $user = User::where('username', Session::get('username'))->first();
        if(\Auth::Check()){
            if($user->level == 0){
                if(Session::get('err') == '1'){
                  return redirect('view_menus');
                }else{
                    return view('edit_menu',['menuname' => $menuname, 
                   'content' => $content, 
                   'status' => $status,
                   'err' =>"",
                   'id' => $id])
                   ->with('username',$user->username)
                   ->with('level',$user->level)
                   ->with('menu',$menu);
                }
            }else{
                return redirect('/');
            }
        }else{
            return redirect('login');
        }
    }

    public function getAddPapers(){
        $menu=Menu::Orderby('id','des')->get();
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        if($user->level==0)
        {
            if(Session::get('err') == '1')
            {
                return view('add_paper',['err'=>"The Paper has been added."])
                ->with('username',$user->username)
                ->with('level',$user->level)
                ->with('menu',$menu);
            }else{
                return view('add_paper')
                ->with('username',$user->username)
                ->with('level',$user->level)->with('err',"")
                ->with('menu',$menu);
            }
        }else{
            return redirect('/');
        }
        }else{
            return redirect('login');
        }
     }
}