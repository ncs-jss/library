<?php

namespace App\Http\Controllers;
use App\Notices;
use App\Arrivals;
use App\Queries;
use App\Suggestions;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	public function getIndex(){
		return view('index');
	}

    public function getLogin(){
    	return view('admin-login')->with('err',"");
    }

    public function getArrivals(){
        $arrivals=Arrivals::Orderby('id','des')->get();
        $id=1;
        return view('new-arrivals',['arrivals' => $arrivals,'id'=>$id]);
    }

    public function getNotices(){
        $notices=Notices::Orderby('id','des')->get();
        $id=1;
    	return view('notices',['notices' => $notices,'id'=>$id]);
    }

    public function getSuggest(){
    	return view('suggest')->with('err',"");
    }

    public function getServices(){
    	return view('services');
    }

    public function getQuery(){
    	return view('query')->with('err',"");
    }

    public function getContact(){
    	return view('contact');
    }

    public function getResources(){
    	return view('e-resources');
    }

    public function getExternalLinks(){
    	return view('external-links');
    }

    public function getAddBook(){
         return view('add_book')->with('err',"");
     }

     public function getAddNotice(){
         return view('add_notice')->with('err',"");
     }

     public function getNotFound(){
        return view('errors.404');
     }

     public function getViewQueries(){
        $queries=Queries::Orderby('id','des')->get();
        $id=1;
        return view('queries',['queries' => $queries,'id'=>$id]);
    }

    public function getSuggestions(){
        $suggestions=Suggestions::Orderby('id','des')->get();
        $id=1;
        return view('suggestions',['suggestions' => $suggestions,'id'=>$id]);
    }

    public function getNotice($id)
    {
        $notice = Notices::where('id',$id)->get()[0]->notice;   
        $subject = Notices::where('id',$id)->get()[0]->subject;
        return view('view_notice',['subject' => $subject, 'notice' => $notice]);   
    }

    public function getViewQuery($id){
        $query = Queries::where('id',$id)->get()[0]->query;   
        $subject = Queries::where('id',$id)->get()[0]->subject;
        return view('view_query',['subject' => $subject, 'query' => $query])->with('err',"");
    }

    public function getViewSuggestion($id){
        $title = Suggestions::where('id',$id)->get()[0]->title;
        $author = Suggestions::where('id',$id)->get()[0]->author;
        $publisher = Suggestions::where('id',$id)->get()[0]->publisher;
        $edition = Suggestions::where('id',$id)->get()[0]->edition;
        $volume = Suggestions::where('id',$id)->get()[0]->volume;
        $review = Suggestions::where('id',$id)->get()[0]->review;
        return view('view_suggestion',['title' => $title, 
            'author' => $author, 
            'publisher' => $publisher, 
            'edition' => $edition, 
            'volume' => $volume, 
            'review' => $review]);
    }

    public function getViewBook($id){
        $book = Arrivals::where('id',$id)->get()[0]->book_name;
        $book_id = Arrivals::where('id',$id)->get()[0]->book_id;
        $book_desc = Arrivals::where('id',$id)->get()[0]->book_desc;
        return view('view_book',['book' => $book, 
            'book_id' => $book_id,
            'book_desc' => $book_desc]);
    }

}
