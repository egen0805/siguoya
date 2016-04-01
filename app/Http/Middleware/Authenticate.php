<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

/**
 *
 * 除了普通的中间价之外还有前置和后置的中间件
 * 任何一个中间件都有一个handle方法用于过滤HTTP请求
 * 此外中间件还有terminate方法用于在HTTP请求结束之后执行操作
 * 例如\Illuminate\Session\Middleware\StartSession::class中session的建立\
 *
 * Class Authenticate
 * @package App\Http\Middleware
 */
class Authenticate{
	/**
	 * The Guard implementation.
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 * @param  Guard $auth
	 */
	public function __construct(Guard $auth){
		$this->auth=$auth;
	}

	/**
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request,Closure $next){
		if($this->auth->guest()){
			if($request->ajax()){
				return response('Unauthorized.',401);
			}else{
				return redirect()->guest('auth/login');
			}
		}
		//向全局模版注入用户信息
		view()->share('adminInfo',\Auth::user());
		return $next($request);
	}
}
