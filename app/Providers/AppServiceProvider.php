<?php
namespace App\Providers;

use App\ArticleClassify;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider{
	/**
	 * 全局共享数据
	 * Bootstrap any application services.
	 * @return void
	 */
	public function boot(){
		view()->share('page_title','思过崖 - 写如诗的代码');
		view()->share('page_keyword','思过崖,曾庆权,广州大学,心理学,程序员,编程,web开发,网站开发,js,jquery,angularjs,bootstrap,php,thinkphp,laravel,centos,mac,苹果');
		view()->share('page_desc','毕业于广州大学心理学专业,不想成为射鸡狮的文艺二B青年不是好程序猿');
		$articleClassifyModel=new ArticleClassify();
		$articleClassify=$articleClassifyModel->getAllParentClassify()->toArray();
		//显示页面导航
		foreach($articleClassify as $key=>$value){
			$articleClassify[$key]['sub_classify']=$articleClassifyModel->getClassifyByPid($value['classify_id'])
					->toArray();
		}
		view()->share('articleClassify',$articleClassify);
	}

	/**
	 * Register any application services.
	 * @return void
	 */
	public function register(){
		//
	}
}
