<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Post;
use Auth;
class SubscribeController extends Controller
{
    // show the form
    public function showSubscribe(){
    	return view('pages.subscribe');
    }

    //process the form
    public function processSubscribe(Request $request){
               //grab the user
                 $user = $request->user();
                 //if there is no user we have to create one
            if( ! $user){
                        $this->validate($request,[
									'name'     =>'required|max:255',
									'email'    =>'required|max:255|unique:users|email',
									'password' =>'required:min:6'

                        	]);
                        //create and login
                           try{
                           $user = User::create([
                                   'name'=>$request->input('name'),
                                   'email'=>$request->input('email'),
                                   'password'=> bcrypt($request->input('password')),
                           	]);
                           Auth::login($user);
                           }catch(\Eceptino $e){
                                  return back()->withErrors(['message'=>'Error creating user']);
                           }
            }
            //create the user subscription
            //grab the credit card token
             $cc_token = $request->input('cc_token');
             $plan = $request->input('plan');
             try{
             $user->newSubscription('main',$plan)->create($cc_token,[
                         'email' => $user->email
             	]);

            }catch(Exception $e){
                return back()->withErrors(['message'=>$e->getMessage()]);
            }
               return redirect('welcome');
    }
    //welcome page
public function showWelcome(){
	   $posts = Post::where('premium',true)->get();
       return    view('pages.welcome',compact('posts'));
}
}
