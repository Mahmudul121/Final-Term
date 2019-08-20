<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\freelancer;
use App\Security;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function index(Request $req){
		return view('login.index');
	}
	public function verify(Request $req){
		
		$result = DB::table('freelancer')->where('email', $req->email)
				->where('password', $req->password)
				->get();
		if(count($result) > 0)
		{
			if($result[0]->type=="Freelancer")
			{
				$req->session()->put('email', $req->email);
				$req->session()->put('type', $result[0]->type);

				$req->session()->put('fullname', $result[0]->username);
				$req->session()->put('area', $result[0]->country);
				$req->session()->put('title2', $result[0]->title);
				$req->session()->put('titledetails', $result[0]->titledetails);
				$req->session()->put('rate2', $result[0]->rate);
				$req->session()->put('skills2', $result[0]->workdetails);
				$req->session()->put('available', $result[0]->hour);
				$req->session()->put('active', $result[0]->status);
				$req->session()->put('id', $result[0]->id);
				return redirect()->route('freelancer.index');
			}
			elseif ($result[0]->type=="Client") {
				$req->session()->put('email', $req->email);
				return redirect()->route('client.index');
			}
		}
		else
		{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
		}
	}
	public function forgetpass(Request $req){
		return view('login.forgetpass');
	}
	public function forgetpasspost(Request $req){
		$a=$req->email;
		$b=$req->question;
		$c=$req->ans;
		$d=$req->password;

		$data=Security::where('question',$b)->where('answer',$c)->where('email',$a)->get();

		if(count($data) > 0)
		{
			$data2=freelancer::where('email',$a)->value('id');


			$aa=$data2;
			$data3=freelancer::find($aa);

			$data3->password=$d;
			$data3->save();

			return redirect()->route('login.index');
		}
		else
		{
			$req->session()->flash('forget', 'Value Does Not Match');
			return redirect()->route('login.forgetpass');

		}

		//return redirect()->route('login.index');
	}

}

