<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class MemberController extends Controller
{
    //
    public function index(Request $req){
		return view('member.index');
	}
	public function update(Request $req){
		$data=Register::where('email',$req->session()->get('email'))->get();
		return view('member.update',['data'=>$data[0]]);
	}
	public function updatepost(Request $req){
		$data=Register::where('email',$req->session()->get('email'))->value("id");
		echo "$data";

		$data2=Register::find($data);
		$data2->name=$req->username;
		$data2->email=$req->email;
		$data2->password=$req->password;
		$data2->save();

		return redirect()->route('logout.index');
	}
}
