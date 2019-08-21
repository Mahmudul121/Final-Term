<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class HomeController extends Controller
{
    public function index(Request $req){
		return view('home.index');
	}
	public function registration(Request $req){
		return view('home.registration');
	}
	public function create(Request $req){
		$user=new Register();
		$user->name=$req->username;
		$user->email=$req->email;
		$user->password=$req->password;
		$user->type=$req->type;
		$user->save();

		return redirect()->route('login.index');
	}
	public function update(Request $req){
		$data=Register::where('email',$req->session()->get('email'))->get();
		return view('home.update',['data'=>$data[0]]);
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
	public function allmember(Request $req){
		$data=Register::where('type',"Member")->get();
		return view('home.update',['data'=>$data[0]]);
	}
}
