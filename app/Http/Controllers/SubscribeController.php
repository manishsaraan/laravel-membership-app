<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SubscribeController extends Controller
{
    // show the form
    public function showSubscribe(){
    	return view('pages.subscribe');
    }

    //process the form
    public function processSubscribe(Request $request){

    }
}
