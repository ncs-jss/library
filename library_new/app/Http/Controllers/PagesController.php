<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	public function getIndex(){
		return view('index');
	}

    public function getLogin(){
    	return view('admin-login');
    }

    public function getArrivals(){
    	return view('new-arrivals');
    }

    public function getNotices(){
    	return view('notices');
    }

    public function getSuggest(){
    	return view('suggest');
    }

    public function getServices(){
    	return view('services');
    }

    public function getQuery(){
    	return view('query');
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
}
