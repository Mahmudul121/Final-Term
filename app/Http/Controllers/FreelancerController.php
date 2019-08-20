<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\freelancer;
use App\Security;
use App\Job;
use App\Worklist;
use App\Workhistory;
use App\Invitation;
use App\Complain;
use App\Message;
use App\Count;


class FreelancerController extends Controller
{
    public function index(Request $req){
	    	$a=Count::where('email',$req->session()->get('email'))->get()->pluck('rate');
	    	//echo $a;
	    	if($a!="[]")
	    	{
		    	$b=0;
		    	for ($i=0; $i < count($a); $i++) { 
		    		$b +=$a[$i];
		    	}

		    	$c=($b/count($a));

		    	$d=round($c,2);
		    	//echo $d;

		    	$aaa=Count::where('email',$req->session()->get('email'))->get()->max('count');

				return view('freelancer.index',['rate'=>$d,'see'=>$aaa]);
			}
			else
			{
				$b=0;
		    	for ($i=0; $i < count($a); $i++) { 
		    		$b +=$a[$i];
		    	}

		    	//$c=($b/count($a));

		    	$d=0;
		    	//echo $d;

		    	$aaa=Count::where('email',$req->session()->get('email'))->get()->max('count');

				return view('freelancer.index',['rate'=>$d,'see'=>$aaa]);
			}
	}
	public function update(Request $req){
		$data = freelancer::where('email', $req->session()->get('email'))->get();
    	return view('freelancer.update',['data'=>$data[0]]);
	}
	public function updatepost(Request $req){
		$user = freelancer::find($req->id);
		$user->username=$req->name;
		$user->password=$req->password;
		$user->title=$req->title;
		$user->rate=$req->rate;
		$user->phoneno=$req->phoneno;
		$user->save();
    	return redirect()->route('login.index');
	}

	public function security(Request $req){
		return view('freelancer.security');
	}
	public function securitypost(Request $req){

		$data= new Security();
		//echo $req->question; 
		//echo $req->answer;

		$data->question= $req->question;
		$data->answer=$req->answer;
		$data->email=$req->session()->get('email');
		$data->save();

		return redirect()->route('freelancer.index');
		//return view('freelancer.index');
	}
	public function active(Request $req, $id){
		$user = freelancer::find($id);
		//echo $id;
		//echo $user;

		if($req->session()->get('active')=='active')
		{
			$a="inactive";
			$req->session()->put('active',$a);
			$user->status=$a;
			$user->save();
			return redirect()->route('freelancer.index');
		}
		elseif ($req->session()->get('active')=='inactive') 
		{
			$req->session()->put('active',"active");
			$user->status="active";
			$user->save();
			return redirect()->route('freelancer.index');
		}
		else{}
	}
	public function job(Request $req){
		$data =Job::where('status',"active")->get();
		return view('freelancer.job',['data'=>$data]);
	}
	public function add(Request $req, $id){
		$data =Job::find($id);

		$work=new Worklist();

		$work->email=$req->session()->get('email');
		$work->jobtitle=$data['title'];
		$work->amount=$data['payment'];
		$work->days=$data['completeday'];
		$work->client=$data['client'];
		$work->save();

		$data->status="inactive";
		$data->save();

		$sta=Job::where('status',"active")->get();
		return view('freelancer.job',['data'=>$sta]);
	}
	public function worklist(Request $req){
		$data =Worklist::where('email',$req->session()->get('email'))->get();
		return view('freelancer.worklist',['data'=>$data]);
	}
	public function delete(Request $req,$id){
		Worklist::destroy($id);
		$data=Worklist::All();
		return view('freelancer.worklist',['data'=>$data]);
	}
	public function done(Request $req,$id){
		$history=new Workhistory();
		$data1 =Worklist::find($id);

		$history->email=$req->session()->get('email');
		$history->title=$data1['jobtitle'];
		$history->amount=$data1['amount'];
		$history->client=$data1['client'];
		$history->save();

		Worklist::destroy($id);

		$data =Worklist::All();
		return view('freelancer.worklist',['data'=>$data]);
	}
	public function workhistory(Request $req){
		$data=Workhistory::where('email',$req->session()->get('email'))->get();
		$a="";
		return view('freelancer.workhistory',['data'=>$data,'total'=>$a]);
	}
	public function earningstatistics(Request $req){
		$data=Workhistory::where('email',$req->session()->get('email'))->get();
		$titles = DB::table('workhistory')->where('email',$req->session()->get('email'))->pluck('amount');

		$a=0;
		//echo $titles;
		for ($i=0; $i < count($titles) ; $i++) { 
			$a +=(int)$titles[$i];
		}
		//echo $a;

		$b=$a." $";

		return view('freelancer.workhistory',['data'=>$data,'total'=>$b]);
	}
	public function adduser(Request $req,$id){
		$data=Worklist::find($id);
		$users = DB::table('freelancer')->where('email','!=',$req->session()->get('email'))->pluck('email');
		//echo $users;
		return view('freelancer.adduser',['data'=>$data,'user'=>$users]);
	}
	public function adduserpost(Request $req){
		$a=$req->user;
		//echo $a;
		$user = DB::table('freelancer')->where('email',$a)->pluck('email');
		//echo $user[0];
		$invitation=new Invitation();
		$invitation->email=$user[0];
		$invitation->title=$req->jobtitle;
		$invitation->amount=$req->amount;
		$invitation->days=$req->day;
		$invitation->client=$req->client;
		$invitation->sender=$req->session()->get('email');
		$invitation->save();
		
		return redirect()->route('freelancer.index');
	}
	public function invitation(Request $req){
		$data=Invitation::where('email',$req->session()->get('email'))->get();
		return view('freelancer.invitation',['data'=>$data]);
	}
	public function deleteinvitation(Request $req,$id){
		Invitation::destroy($id);
		$data=Invitation::where('email',$req->session()->get('email'))->get();
		return view('freelancer.invitation',['data'=>$data]);
	}
	public function addinvitation(Request $req,$id){
		$value=Invitation::find($id);
		$list=new Worklist();
		//echo $value['id'];
		$list->email=$req->session()->get('email');
		$list->jobtitle=$value['title'];
		$list->amount=$value['amount'];
		$list->days=$value['days'];
		$list->client=$value['client'];
		$list->save();
		Invitation::destroy($id);

		$data=Invitation::where('email',$req->session()->get('email'))->get();
		return view('freelancer.invitation',['data'=>$data]);
	}
	public function complain(Request $req,$id){
		$data=Worklist::find($id);
		return view('freelancer.complain',['data'=>$data]);
	}
	public function complainpost(Request $req,$id){
		$data=new Complain();
		$data->sender=$req->session()->get('email');
		$data->message=$req->sms;
		$data->reciever=$req->reciever;
		$data->save();
		return redirect()->route('freelancer.index');
	}
	public function message(Request $req){
		$data=Message::where('reciever',$req->session()->get('email'))->get();
		return view('freelancer.message',['data'=>$data]);
	}
	public function room(Request $req){
		$data=freelancer::where('email','!=',$req->session()->get('email'))->pluck('email');

		return view('freelancer.room',['data'=>$data]);
	}
	public function roompost(Request $req){
		$data=new Message();

		$data->room=$req->name;
		$data->sms=$req->message;
		$data->reciever=$req->user;
		$data->sender=$req->session()->get('email');
		$data->save();

		return redirect()->route('freelancer.message');
	}
	public function reply(Request $req,$id){
		$data=Message::find($id);

		return view('freelancer.reply',['data'=>$data]);
	}
	public function replypost(Request $req,$id){
		$data=new Message();

		$data->room=$req->name;
		$data->sms=$req->message;
		$data->sender=$req->session()->get('email');
		$data->reciever=$req->reciever;
		$data->save();
		return redirect()->route('freelancer.message');
	}

	function joblist()
    {
     return view('freelancer.joblist');
    }

    function joblistaction(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      //echo "$query";
      //echo "sdfsdfsf";
      if($query != '')
      {
       $data = Job::where('status', "active")->where('title', 'like', '%'.$query.'%')
         ->orWhere('client', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = Job::where('status', "active")->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
       	$a="freelancer.add,";
        $output .= '
        <tr>
         <td>'.$row->id.'</td>
         <td>'.$row->title.'</td>
         <td>'.$row->description.'</td>
         <td>'.$row->payment.'</td>
         <td>'.$row->completeday.'</td>
         <td>'.$row->client.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }

    }



}
