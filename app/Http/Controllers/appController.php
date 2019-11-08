<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\auth;
class appController extends Controller
{
    //
	public function auth(Request $req){
			$r_user = $req->input('username');
			$r_pass = $req->input('password');
			$res = auth::where('username','=',$r_user)->where('password','=',$r_pass)->get();
			if(count($res)>0){
				Session::put('logged_in',1);
				return redirect('/home');
			}
			else{
				return redirect('/')->with('status','Username/Password Incorrect');
			}
	}
}
