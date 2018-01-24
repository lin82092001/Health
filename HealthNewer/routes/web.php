<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Route::get('/',function(){return view('welcome');});

//測試網頁用
//----------------------------------------------------
//Route::post('id','Auth\LoginController@test_id');
//Route::get('test_view','Auth\LoginController@test_view');
//----------------------------------------------------
use Illuminate\Auth\Middleware\Authenticate;


Route::post('login_user', 'Auth\LoginController@login');
Route::get('login','Auth\LoginController@login_index');

Route::post('regs','Auth\RegisterController@create_user');

Route::group(['prefix'=>'register'],function(){
		Route::post('create_diary','Auth\RegisterController@create_diary');
		Route::get('/','Auth\RegisterController@register_questionnaire');
		Route::get('diary_before','Auth\RegisterController@register_diary_before');
});

Route::group(['middleware'=>'auth'],function(){
		Route::post('diary_after/create_diary','HealthsController@create_diary');
		Route::post('daily/create_daily','HealthsController@create_daily');
		Route::post('satisfaction/create_satisfaction','HealthsController@create_satisfaction');
		Route::get('show','HealthsController@show');
		Route::get('daily','HealthsController@daily');
		Route::get('diary_after','HealthsController@diary_after');
		Route::get('satisfaction','HealthsController@satisfaction');
		Route::get('logout','Auth\LoginController@logout');
});

Route::get('index','HealthsController@index');