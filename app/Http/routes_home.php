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
	//使用as给路由定义一个别名,可以更容易地使用route()方法创建链接和重定向;
	Route::get('/home/zqq',[
			'as'=>'zqq',
			'uses'=>'TestController@zqq'
	]);

	Route::group(['middleware'=>'auth'],function(){
		Route::get('/home/test/auth',function(){
			return '有权限控制';
		});
	});









	Route::get('/home/test/test','TestController@test');
	Route::resource('/home/test','TestController');
	Route::get('/home/about/personal',function(){return view('home.about.personal');});
	Route::get('/home/about/web',function(){return view('home.about.web');});
	Route::get('/home/about/me',function(){return view('home.about.me');});
	Route::get('/home/about/offer',function(){return view('home.about.offer');});
	Route::get('/home/os/tools/greenvpn',function(){return view('home.os.tools.greenvpn');});
	/**
	 * 常规请求
	 */
	Route::post('/home/index/ajaxarticlelist','IndexController@ajaxarticlelist');
	Route::resource('/home/series','SeriesController');
	Route::resource('/home/article','ArticleController');
	Route::get('/home/{classify_main}/{classify_sub}','ArticleController@index');
	// TODO 之前的链接形式,待百度收录新的之后可以再删除
	Route::get('/home/{classify_main}/{classify_sub}/{id}','ArticleController@show');
	//默认路由
	Route::get('/home','IndexController@index');
});