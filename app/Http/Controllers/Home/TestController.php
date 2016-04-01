<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Common\Controller;
class TestController extends Controller{
	/**
	 * Display a listing of the resource.
	 * @return \Illuminate\Http\Response
	 */
	public function index(){
		return view('test.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * @return \Illuminate\Http\Response
	 */
	public function create(){
		//
	}

	/**
	 * 简化路由和链接创建方式
	 */
	public function zqq(){
		print route('zqq');
		dd(redirect());
		return redirect('https://www.baidu.com/',302);
	}

	public function test(){

		dd(\Route::getCurrentRoute());


		/**
		 * 安全
		 * csrf_token()
		 */
		dd(csrf_token());


		/**
		 * 生成url方式
		 * url(url路径)
		 * asset(一般是资源文件的路径)
		 * route(路由名称)
		 * action(控制器)
		 */
		echo action('Home/ArticleController@index').'<br/>';
		echo route('home.article.index').'<br/>';
		echo asset('home/frontend/index').'<br/>';
		echo url('/home/frontend/index');
		//重定向
		dd(redirect());
		return redirect('http://www.baidu.com/',302);
		//报错
		abort(404);


		//获取整个应用
		dd(\App::environment());
		dd(app()->environment());
		dd(Application::class);


		//获取配置
		dd($_ENV);
		dd(env('DB_HOST'));
		dd(config('app.timezone'));
	}
}
