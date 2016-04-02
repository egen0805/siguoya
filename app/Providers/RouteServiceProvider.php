<?php
namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
class RouteServiceProvider extends ServiceProvider{
	/**
	 * This namespace is applied to the controller routes in your routes file.
	 * In addition, it is set as the URL generator's root namespace.
	 * @var string
	 */
	protected $namespace='App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 * @param  \Illuminate\Routing\Router $router
	 * @return void
	 */
	public function boot(Router $router){
		parent::boot($router);
		/**
		 * 路由模型绑定
		 * 用于简化控制器操作
		 * 如果不绑定,那么控制器里面的show($id)方法接收的参数为数字格式的ID
		 * 如果绑定,那么接收的参数将为根据Restful的目标而自动获取的查询结果集
		 * arg1:路由里面的增删查改的对象
		 * arg2:对象对应的模型
		 */
		$router->model('article','App\Article');
	}

	/**
	 * Define the routes for the application.
	 * @param  \Illuminate\Routing\Router $router
	 * @return void
	 */
	public function map(Router $router){
		$router->group(['namespace'=>$this->namespace],function ($router){
			require app_path('Http/routes.php');
		});
	}
}
