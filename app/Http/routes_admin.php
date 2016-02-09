<?php
/**
 * Created by PhpStorm.
 * User: zqq
 * Date: 11/20/15
 * Time: 4:50 PM
 */


/**
 * resource()方法生成的store路由,通过php artisan route:list查看是可以接受post请求的
 * 但是使用Ajax通过post请求提交表单会报405错误
 * 通过Chrome浏览器的Re锕dminsponse Headers里面的allow字段,可以查看具体能接受的请求方法
 */
Route::group(['namespace'=>'Admin','middleware'=>['auth']],function(){
	Route::get('/admin/','IndexController@index');
	Route::get('/admin/index/index','IndexController@index');
	//文章
	Route::resource('/admin/article','ArticleController');
	Route::post('/admin/article/ajaxClassifyList','ArticleController@ajaxClassifyList');
	Route::post('/admin/article/store','ArticleController@store');
	//类别
	Route::resource('/admin/classify','ClassifyController');
	//系列
	Route::resource('/admin/series','SeriesController');
});

Route::controllers([
	'auth'=>'Common\AuthController',
	'password'=>'Common\PasswordController'
]);