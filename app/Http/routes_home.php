<?php
/**
 * Created by PhpStorm.
 * User: zqq
 * Date: 11/20/15
 * Time: 4:50 PM
 */

Route::group(['namespace'=>'Home'],function(){

	Route::get('/home/backend/tools','ArticleController@phpstorm');
	Route::get('/home/backend/tools/phpstorm','ArticleController@phpstormlist');
	Route::get('/home/backend/tools/phpstorm/{id}','ArticleController@show');

	Route::get('/home/arithmetic/javascript/datahandler','ArticleController@arithmetic');
	Route::get('/home/arithmetic/javascript/dataselect','ArticleController@arithmetic');
	Route::get('/home/arithmetic/javascript/dataorder','ArticleController@arithmetic');
	Route::get('/home/arithmetic/javascript/datacode','ArticleController@arithmetic');

	Route::get('home/arithmetic/javascript',function(){
		return view('home.article.preview');
	});
	Route::get('home/arithmetic/javascript/{articlelist}','ArticleController@articlelist');
	Route::get('home/arithmetic/javascript/{articlelist}/{id}','ArticleController@show');

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