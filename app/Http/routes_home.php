<?php
/**
 * Created by PhpStorm.
 * User: zqq
 * Date: 11/20/15
 * Time: 4:50 PM
 */

Route::group(['namespace'=>'Home'],function(){
	/**
	 * 静态页面
	 */
	Route::get('/home/about/personal',function(){return view('home.about.personal');});
	Route::get('/home/about/web',function(){return view('home.about.web');});
	Route::get('/home/about/me',function(){return view('home.about.me');});
	Route::get('/home/about/offer',function(){return view('home.about.offer');});
	Route::get('/home/os/tools/greenvpn',function(){return view('home.os.tools.greenvpn');});
	/**
	 * 定制页面
	 */
	Route::get('/home/backend/tools','ArticleController@phpstorm');
	Route::get('/home/backend/tools/phpstorm','ArticleController@phpstormlist');
	Route::get('/home/backend/tools/phpstorm/{id}','ArticleController@show');
	/**
	 * 专题页面
	 */
	//JaavaScript算法
	Route::get('/home/arithmetic/javascript',function(){return view('home.article.javascript');});
	Route::get('/home/arithmetic/javascript/datahandler','ArticleController@arithmetic');
	Route::get('/home/arithmetic/javascript/dataselect','ArticleController@arithmetic');
	Route::get('/home/arithmetic/javascript/dataorder','ArticleController@arithmetic');
	Route::get('/home/arithmetic/javascript/datacode','ArticleController@arithmetic');
	Route::get('/home/arithmetic/javascript/{series}','ArticleController@articlelist')->where('series','[A-Za-z]+');
	Route::get('/home/arithmetic/javascript/{id}','ArticleController@show')->where('series','[0-9]+');
	Route::get('/home/arithmetic/javascript/{articlelist}/{id}','ArticleController@show');
	//jQuery源码
	Route::get('/home/frontend/jquerysource','ArticleController@jquerysource');
	Route::get('/home/frontend/jquerysource/{id}','ArticleController@show');

	/**
	 * 常规请求
	 */
	Route::post('/home/index/ajaxarticlelist','IndexController@ajaxarticlelist');
	Route::get('/home/{classify_main}/{classify_sub}','ArticleController@index');
	Route::get('/home/{classify_main}/{classify_sub}/{id}','ArticleController@show');
	//默认路由
	Route::get('/home','IndexController@index');
});