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
		
		return view('home.update');
	}
}
