<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;
use App\auth;
use App\member;
use App\claim;
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

	public function creg(Request $req){
		$mem_no = $req->input('mem_no');
		$check = member::where('mem_no','=',$mem_no)->get();
		if(count($check)>0){
			$claim = new claim;
			$claim->mem_no = $req->input('mem_no');
			$claim->name = $req->input('name');
			$claim->aadhar = $req->input('aadhar');
			$claim->hname = $req->input('hname');
			$claim->dname = $req->input('dname');
			$claim->dcode = $req->input('dcode');
			$claim->doa = $req->input('doa');
			$claim->dod = $req->input('dod');
			$claim->amt = $req->input('amt');
			$claim->bamt = $req->input('bamt');

			if($claim->save()){
				return redirect('/registration/claimants')->with('success','Record Added');
			}
		}
		else{
			return redirect('/registration/claimants')->with('fail','Member Not Registered');
		}
	}

	public function viewm(){
		// $res = member::all();
		$res = DB::table('member')->orderby('name')->get();
		return view('viewm',compact('res'));
	}

	public function viewc(){
		// $res = claim::all();
		$res = DB::table('claim')->orderby('name')->get();
		return view('viewc',compact('res'));
	}

	public function logout(){
		Session::forget('logged_in');
		return redirect('/');
	}
}
