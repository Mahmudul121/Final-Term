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
		
		/*$result = DB::table('freelancer')->where('email', $req->email)
				->where('password', $req->password)
				->get();
		if(count($result) > 0)
		{
			if($result[0]->type=="Freelancer")
			{
				return redirect()->route('freelancer.index');
			}
			elseif ($result[0]->type=="Client") {
				//$req->session()->put('email', $req->email);
				return redirect()->route('client.index');
			}
		}
		else
		{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
		}*/
	}
	
	

}

