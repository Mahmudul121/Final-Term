<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complain;
use App\Message;
use App\freelancer;
use App\Workhistory;
use App\Count;

class ClientController extends Controller
{
    //
    public function index(Request $req){
		return view('client.index');
	}
	public function complain(Request $req){
		$data=Complain::where('reciever',$req->session()->get('email'))->get();
		return view('client.complain',['data'=>$data]);
	}
	public function sms(Request $req){
		$data=Message::where('reciever',$req->session()->get('email'))->get();
		return view('client.sms',['data'=>$data]);
	}
	public function freelancerall(Request $req){
		$data=freelancer::where('type',"Freelancer")->where('status',"active")->get();
		//echo $data;
		return view('client.freelancer',['data'=>$data]);
	}
	public function workhistory(Request $req){
		$data=Workhistory::where('client',$req->session()->get('email'))->get();
		//echo $data;
		return view('client.workhistory',['data'=>$data]);
	}
	public function rating(Request $req, $id){
		$data=Workhistory::find($id);
		//                                                  echo $data;
		$error="";
		return view('client.rating',['data'=>$data,'error'=>$error]);
	}
	public function ratingpost(Request $req, $id){
		//$data=Workhistory::find($id);

		$ab=$req->rate;

		if($ab>0&&$ab<=10)
		{
			$a=new Count();

			$a->email=$req->reciever;
			$a->rate=$req->rate;
			$a->sender=$req->session()->get('email');
			$a->count=0;
			$a->save();
			//echo $data;
			return redirect()->route('client.workhistory');
		}
		else
		{
			$data=Workhistory::find($id);
			//                                                  echo $data;
			$error="Rate must be less than 10";
			return view('client.rating',['data'=>$data,'error'=>$error]);
		}
	}
	public function profile(Request $req, $id){
		$data=freelancer::find($id);
		$c=$data['email'];
		//echo $c;
		$a=Count::where('email',$c)->get()->max('count');

		$s=$a+1;

		$ss= new Count();

		$ss->email=$data['email'];
		$ss->rate=0;
		$ss->count=0;
		$ss->sender=$req->session()->get('email');
		$ss->save();

		$a=Count::where('email',$c)->update(['count'=>$s]);
		return view('client.profile',['data'=>$data]);
	}
}