<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/home/signup', 'HomeController@signup')->name('home.signup');
Route::post('/home/signup', 'HomeController@signuppost');
Route::group(['middleware'=>['sess2']], function(){
	Route::get('/home/signup2', 'HomeController@signup2')->name('home.signup2');
	Route::post('/home/signup2', 'HomeController@signuppost2');
	Route::get('/home/signup3', 'HomeController@signup3')->name('home.signup3');
	Route::post('/home/signup3', 'HomeController@signuppost3');
	Route::get('/home/signup4', 'HomeController@signup4')->name('home.signup4');
	Route::post('/home/signup4', 'HomeController@signuppost4');
});


Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/login/forgetpass', 'LoginController@forgetpass')->name('login.forgetpass');
Route::post('/login/forgetpass', 'LoginController@forgetpasspost');

Route::group(['middleware'=>['sess']], function(){

	Route::get('/freelancer', 'FreelancerController@index')->name('freelancer.index');

	Route::get('/freelancer/update', 'FreelancerController@update')->name('freelancer.update');
	Route::post('/freelancer/update', 'FreelancerController@updatepost');
	Route::get('/freelancer/security', 'FreelancerController@security')->name('freelancer.security');
	Route::post('/freelancer/security', 'FreelancerController@securitypost');
	Route::get('/freelancer/active/{id}', 'FreelancerController@active')->name('freelancer.active');
	Route::get('/freelancer/job', 'FreelancerController@job')->name('freelancer.job');
	Route::get('/freelancer/add/{id}', 'FreelancerController@add')->name('freelancer.add');
	Route::get('/freelancer/worklist', 'FreelancerController@worklist')->name('freelancer.worklist');
	Route::get('/freelancer/delete/{id}', 'FreelancerController@delete')->name('freelancer.delete');
	Route::get('/freelancer/done/{id}', 'FreelancerController@done')->name('freelancer.done');
	Route::get('/freelancer/workhistory', 'FreelancerController@workhistory')->name('freelancer.workhistory');
	Route::get('/freelancer/earningstatistics', 'FreelancerController@earningstatistics')->name('freelancer.earningstatistics');

	Route::get('/freelancer/adduser/{id}', 'FreelancerController@adduser')->name('freelancer.adduser');
	Route::post('/freelancer/adduser/{id}', 'FreelancerController@adduserpost');

	Route::get('/freelancer/invitation', 'FreelancerController@invitation')->name('freelancer.invitation');
	Route::get('/freelancer/deleteinvitation/{id}', 'FreelancerController@deleteinvitation')->name('freelancer.deleteinvitation');
	Route::get('/freelancer/addinvitation/{id}', 'FreelancerController@addinvitation')->name('freelancer.addinvitation');

	Route::get('/freelancer/complain/{id}', 'FreelancerController@complain')->name('freelancer.complain');
	Route::post('/freelancer/complain/{id}', 'FreelancerController@complainpost');

	Route::get('/freelancer/message', 'FreelancerController@message')->name('freelancer.message');

	Route::get('/freelancer/room', 'FreelancerController@room')->name('freelancer.room');
	Route::post('/freelancer/room', 'FreelancerController@roompost');
	//Route::get('/freelancer/viewsms', 'FreelancerController@viewsms')->name('freelancer.viewsms');
	Route::get('/freelancer/reply/{id}', 'FreelancerController@reply')->name('freelancer.reply');
	Route::post('/freelancer/reply/{id}', 'FreelancerController@replypost');

	Route::get('/freelancer/joblist', 'FreelancerController@joblist')->name('freelancer.joblist');
	Route::get('/freelancer/joblist/action', 'FreelancerController@joblistaction')->name('freelancer.joblistaction');




	//client

	Route::get('/client', 'ClientController@index')->name('client.index');
	Route::get('/client/complain', 'ClientController@complain')->name('client.complain');
	Route::get('/client/sms', 'ClientController@sms')->name('client.sms');
	Route::get('/client/freelancerall', 'ClientController@freelancerall')->name('client.freelancerall');
	Route::get('/client/workhistory', 'ClientController@workhistory')->name('client.workhistory');
	Route::get('/client/rating/{id}', 'ClientController@rating')->name('client.rating');
	Route::post('/client/rating/{id}', 'ClientController@ratingpost');
	Route::get('/client/profile/{id}', 'ClientController@profile')->name('client.profile');
});


Route::get('/logout', 'LogoutController@index')->name('logout.index');