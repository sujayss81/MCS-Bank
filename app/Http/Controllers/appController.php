<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\auth;
use App\member;
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

	public function reg(Request $req){
		if($req->input('mc') == "yes"){
			$mc = true;
		}
		else{
			$mc = false;
		}
		$res = member::where('mobile','=',$req->input('mobile'))->get();
		if(count($res)>0){
			return redirect('/registration')->with('fail','Duplicate Entry Found(Mobile Number Already Exists)');
		}
		$mem = new member;
		$mem->mc = $mc;
		$mem->mem_no = $req->input('mem_no');
		$mem->name = $req->input('name');
		$mem->dom = $req->input('dom');
		$mem->address = $req->input('address');
		$mem->aadhar = $req->input('aadhar');
		$mem->gender = $req->input('gender');
		$mem->mobile = $req->input('mobile');
		$mem->category = $req->input('category');
		$mem->occupation = $req->input('occupation');
		$mem->bgroup = $req->input('bgroup');
		$mem->age = $req->input('age');
		$mem->acc_no = $req->input('acc_no');
		if($mem->save()){
			return redirect('/registration')->with('success','Entry Added');
		}
		else{
			return redirect('/registration')->with('fail','Something Went Wrong!!');
		}
	}
}
