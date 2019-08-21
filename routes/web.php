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

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/home/registration', 'HomeController@registration')->name('home.registration');
Route::post('/home/registration', 'HomeController@create');
Route::get('/home/update', 'HomeController@update')->name('home.update');
Route::post('/home/update', 'HomeController@updatepost');
Route::get('/home/allmember', 'HomeController@allmember')->name('home.allmember');
Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');
Route::get('/home/addcar', 'HomeController@addcar')->name('home.addcar');
Route::post('/home/addcar', 'HomeController@addcarpost');






Route::get('/member', 'MemberController@index')->name('member.index');
Route::get('/member/update', 'MemberController@update')->name('member.update');
Route::post('/member/update', 'MemberController@updatepost');

Route::get('/logout', 'LogoutController@index')->name('logout.index');