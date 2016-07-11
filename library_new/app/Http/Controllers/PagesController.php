<?php

namespace App\Http\Controllers;
use App\Notices;
use App\Arrivals;
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
    	return view('suggest');
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

}
