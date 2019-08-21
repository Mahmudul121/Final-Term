<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function index(Request $req){
		return view('login.index');
	}
	public function verify(Request $req){
		
		$result = DB::table('user')->where('email', $req->email)
				->where('password', $req->password)
				->get();
		if(count($result) > 0)
		{
			if($result[0]->type=="Admin")
			{
				$req->session()->put('email', $req->email);
				return redirect()->route('home.index');
			}
			elseif ($result[0]->type=="Member") {
				$req->session()->put('email', $req->email);
				return redirect()->route('member.home');
			}
		}
		else
		{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
		}
	}
	
	

}

