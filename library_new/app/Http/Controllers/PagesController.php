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
    	return view('admin-login')
        ->with('err',"")
        ->with('username',"Guest")
        ->with('level',3);
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


    public function getSuggest(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
       return view('suggest')
       ->with('err',"")
       ->with('username',$user->username)
       ->with('level',$user->level);
        }else{
        return view('suggest')
        ->with('err',"")
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

    public function getQuery(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('query')
        ->with('err',"")
        ->with('username',$user->username)
        ->with('level',$user->level);
        }else{
        return view('query')
        ->with('err',"")
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

    public function getAddBook(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        if($user->level==0)
        {
        return view('add_book')
        ->with('username',$user->username)
        ->with('level',$user->level)->with('err',"");
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
        if($user->level==0)
        {
        return view('add_notice')
        ->with('username',$user->username)
        ->with('level',$user->level);
        }else{
            return redirect('/');   
        }
        }else{
            return redirect('login');
        }
     }

     public function getNotFound(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('errors.404')
        ->with('username',$user->username)
        ->with('level',$user->level);
        }else{
        return view('errors.404')
        ->with('username',"Guest")
        ->with('level',3);
        }
     }

     public function getViewQueries(){
        $queries=Queries::Orderby('id','des')->get();
        $id=1;
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('queries',['queries' => $queries,
            'id'=>$id])
            ->with('username',$user->username)
            ->with('level',$user->level);
        }else{
        return view('queries',['queries' => $queries,
            'id'=>$id])
            ->with('username',"Guest")
            ->with('level',3);
        }
    }

    public function getSuggestions(){
        $suggestions=Suggestions::Orderby('id','des')->get();
        $id=1;
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('suggestions',['suggestions' => $suggestions,
            'id'=>$id])
            ->with('username',$user->username)
            ->with('level',$user->level);
        }else{
        return view('suggestions',['suggestions' => $suggestions,
            'id'=>$id])
            ->with('username',"Guest")
            ->with('level',3);
        }
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
        return view('view_notice',['subject' => $subject, 
            'notice' => $notice])
            ->with('username',"Guest")
            ->with('level',3);
        }  
    }

    public function getViewQuery($id){
        $query = Queries::where('id',$id)->get()[0]->query;   
        $subject = Queries::where('id',$id)->get()[0]->subject;
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('view_query',['subject' => $subject, 
            'query' => $query])
            ->with('username',$user->username)
            ->with('level',$user->level);
        }else{
        return view('view_query',['subject' => $subject, 
            'query' => $query])
            ->with('username',"Guest")
            ->with('level',3);
        }
    }

    public function getViewSuggestion($id){
        $title = Suggestions::where('id',$id)->get()[0]->title;
        $author = Suggestions::where('id',$id)->get()[0]->author;
        $publisher = Suggestions::where('id',$id)->get()[0]->publisher;
        $edition = Suggestions::where('id',$id)->get()[0]->edition;
        $volume = Suggestions::where('id',$id)->get()[0]->volume;
        $review = Suggestions::where('id',$id)->get()[0]->review;
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('view_suggestion',['title' => $title, 
            'author' => $author, 
            'publisher' => $publisher, 
            'edition' => $edition, 
            'volume' => $volume, 
            'review' => $review])
            ->with('username',$user->username)
            ->with('level',$user->level);
        }else{
        return view('view_suggestion',['title' => $title, 
            'author' => $author, 
            'publisher' => $publisher, 
            'edition' => $edition, 
            'volume' => $volume, 
            'review' => $review])
            ->with('username',"Guest")
            ->with('level',3);
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
        return view('view_book',['book' => $book, 
            'book_id' => $book_id,
            'book_desc' => $book_desc])
            ->with('username',"Guest")
            ->with('level',3);
        }
    }

    public function getAddMenu(){
        if(\Auth::Check()){
        $user = User::where('username', Session::get('username'))->first();
        return view('add_menu')
        ->with('err',"")
        ->with('username',$user->username)
        ->with('level',$user->level);
        }else{
        return view('add_menu')
        ->with('err',"")
        ->with('username',"Guest")
        ->with('level',3);
        }
    }

    public function logout(){
        \Auth::logout();
        session_unset();
        // $user = Session::get('username');
        // echo $user;
        return redirect('/');
    }

}
