<?php
/**
 * Created by PhpStorm.
 * User: zqq
 * Date: 11/20/15
 * Time: 4:50 PM
 */

Route::group(['namespace'=>'Home'],function(){

	Route::get('/home/about/me',function(){
		return view('home.about.me');
	});

	Route::get('/home/os/tools/greenvpn',function(){
		return view('home.os.tools.greenvpn');
	});

	Route::get('home/{classify_main}/{classify_sub}','ArticleController@index');
	Route::get('home/{classify_main}/{classify_sub}/{id}','ArticleController@show');





	Route::get('/home','IndexController@index');
});