<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\freelancer;
use App\Http\Requests\Signup;

class HomeController extends Controller
{
    public function index(Request $req){
    	$req->session()->flush();
		return view('home.index');
	}
	public function signup(Request $req){
		return view('home.signup1');
	}
	public function signuppost(Signup $req){
		$req->session()->put('fname', $req->fname);
		$req->session()->put('lname', $req->lname);
		$req->session()->put('email', $req->email);
		return redirect()->route('home.signup2');
	}
	public function signup2(Request $req){
		return view('home.signup2');
	}
	public function signuppost2(Request $req){
		$req->session()->put('country', $req->Country);
		$req->session()->put('password', $req->password);
		$req->session()->put('type', $req->title);

		if($req->title=="Freelancer")
		{
			return redirect()->route('home.signup3');
		}
		else
		{
			return view('home.signup1');
		}
	}

	public function signup3(Request $req){
		return view('home.signup3');
	}
	public function signuppost3(Request $req){
		$req->session()->put('worktitle', $req->work);
		$req->session()->put('skills', $req->skills);
		$req->session()->put('experience', $req->experience);
		return redirect()->route('home.signup4');
	}
	public function signup4(Request $req){
		return view('home.signup4');
	}
	public function signuppost4(Request $req){

		 $freelancer = new freelancer();

        //database=form name
		 $q=$req->session()->get('fname');
		 $w=$req->session()->get('lname');
		 $a=$q." ".$w;

        $freelancer->username = $a;
        $freelancer->email = $req->session()->get('email');
        $freelancer->country = $req->session()->get('country');
        $freelancer->password = $req->session()->get('password');
        $freelancer->type = $req->session()->get('type');
        $freelancer->worktitle = $req->session()->get('worktitle');
        $freelancer->workdetails = $req->session()->get('skills');
        $freelancer->experience = $req->session()->get('experience');

        $freelancer->title = $req->title;
        $freelancer->titledetails = $req->skill;
        $freelancer->english = $req->english;
        $freelancer->rate = $req->rate;
        $freelancer->hour = $req->hour;
        $freelancer->phoneno = $req->phone;
        $freelancer->status="active";

        //$user->type = "user";
        /*echo $a."<br/>";
        echo $freelancer->email."<br/>"; 
		echo $freelancer->country."<br/>";
		echo $freelancer->password."<br/>";
		echo $freelancer->type."<br/>";
		echo $freelancer->worktitle."<br/>";
		echo $freelancer->workdetails."<br/>";
		echo $freelancer->experience."<br/>";
		echo $freelancer->title."<br/>";
		echo $freelancer->titledetails."<br/>";
		echo $freelancer->english."<br/>";
		echo $freelancer->rate."<br/>";
		echo $freelancer->hour."<br/>";
		echo $freelancer->phoneno."<br/>";*/
        $freelancer->save();
        $req->session()->flush();
		return redirect()->route('login.index');
	}

}
