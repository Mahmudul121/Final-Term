<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use App\Car;
use App\rent;
use App\Payment;

class MemberController extends Controller
{
    //
    public function index(Request $req){
		return view('member.index');
	}
	public function home(Request $req){
		$data=Car::All()->pluck("carname");
		//echo $data;
		return view('member.home',['car'=>$data]);
	}
	public function update(Request $req){
		$data=Register::where('email',$req->session()->get('email'))->get();
		return view('member.update',['data'=>$data[0]]);
	}
	public function updatepost(Request $req){
		$data=Register::where('email',$req->session()->get('email'))->value("id");
		//echo "$data";

		$data2=Register::find($data);
		$data2->name=$req->username;
		$data2->email=$req->email;
		$data2->password=$req->password;
		$data2->save();

		return redirect()->route('logout.index');
	}
	public function homepost(Request $req){
		$data=Car::where('carname',$req->carname)->get();

		
		$timestamp = strtotime($req->from);
		$day = date('d', $timestamp);
		$timestamp2 = strtotime($req->to);
		$day2 = date('d', $timestamp2);


		if($req->from!=""&&$req->to!="" && $day2 >=$day)
		{
			$req->session()->put('a', $day);
			$req->session()->put('b', $day2);
			$req->session()->put('from', $req->from);
			$req->session()->put('to', $req->to);
			$req->session()->put('car', $req->carname);
			return redirect()->route('member.rentcar');
		}
		else
		{
			$req->session()->flash('homee', 'Invalid data');
			return redirect()->route('member.home');
		}

		//return redirect()->route('member.rentcar');
	}
	public function rentcar(Request $req){
		$data=Car::where('carname',$req->session()->get('car'))->get();
			return view('member.rentcar',['data'=>$data[0]]);
	}

	public function rentcarpost(Request $req){

		$timestamp = strtotime($req->from);
		$day = date('d', $timestamp);
		$timestamp2 = strtotime($req->to);
		$day2 = date('d', $timestamp2);


		if($req->from!=""&&$req->to!="" && $day2 >=$day)
		{
			$totalday=$day2-$day;
			$cost=$req->cost*$totalday;

			//echo "$cost";
			$car=new rent();
			$car->email=$req->session()->get('email');
			$car->carname=$req->name;
			$car->perdaycost=$req->cost;
			$car->totalday=$totalday;
			$car->totalcost=$cost;
			$car->status="unpaid";
			$car->save();

			return redirect()->route('member.index');
		}
		else
		{
			$req->session()->flash('homee', 'Invalid data');
		}
		
	}
	public function rentall(Request $req){
		$data=rent::where('status',"unpaid")->get();
			return view('member.rentall',['data'=>$data]);
	}
	public function delete(Request $req,$id){
		rent::destroy($id);
		$data=rent::where('status',"unpaid")->get();
		return view('member.rentall',['data'=>$data]);
	}
	public function final(Request $req,$id){
		$data1=rent::find($id);
		$data1->status="paid";
		$data1->save();
		return redirect()->route('member.payment');
	}
	public function payment(Request $req){
		
		return view('member.payment');
	}
	public function paymentpost(Request $req){
		$pay=new Payment();
		$pay->name=$req->session()->get('email');
		$pay->cardno=$req->cardno;
		$pay->cost=$req->cost;
		$pay->save();
		return redirect()->route('member.index');
	}
	public function renthistory(Request $req){
		$data=rent::where('status',"paid")->get();
			return view('member.renthistory',['data'=>$data]);
	}
	public function viewcar(Request $req){
		$data=Car::All();
		return view('member.viewcar',['data'=>$data]);
	}
	public function viewcarpost(Request $req){
		$data=Car::where('category',$req->search)->get();
		return view('member.viewcar',['data'=>$data]);
	}
	public function rent(Request $req,$id){
		$data=Car::find($id);
		//echo "ass";
		return view('member.rent',['data'=>$data]);
	}
	public function rentpost(Request $req,$id){
		$timestamp = strtotime($req->from);
		$day = date('d', $timestamp);
		$timestamp2 = strtotime($req->to);
		$day2 = date('d', $timestamp2);


		if($req->from!=""&&$req->to!="" && $day2 >=$day)
		{
			$totalday=$day2-$day;
			$cost=$req->cost*$totalday;

			//echo "$cost";
			$car=new rent();
			$car->email=$req->session()->get('email');
			$car->carname=$req->name;
			$car->perdaycost=$req->cost;
			$car->totalday=$totalday;
			$car->totalcost=$cost;
			$car->status="unpaid";
			$car->save();

			return redirect()->route('member.index');
		}
		else
		{
			$req->session()->flash('homee', 'Invalid data');
			//echo "assh";
			return redirect()->route('member.viewcar');
		}
	}

}
