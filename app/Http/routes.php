<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//前台路由
require_once('routes_home.php');

//后台路由
require_once('routes_admin.php');

//全局路由
Route::post('/common/file/uploadFile','Common\FileController@uploadFile');
Route::get('/','Home\IndexController@index');












