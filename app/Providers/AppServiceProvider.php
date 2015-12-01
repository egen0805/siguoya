<?php
namespace App\Providers;

use App\ArticleClassify;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Expression\Regex;
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
		//body名称,用于构建less的命名空间
		if(is_int(substr(\Request::path(),strlen(\Request::path())-1)+0)){
			view()->share('page_name','home_article_show');
		}else{
			preg_match_all('/(\D+)/',\Request::path(),$capture);
			view()->share('page_name',substr(str_replace('/','_',$capture[0][0]),0,strlen($capture[0][0])-1));
		}
		//显示页面导航
		$articleClassify=ArticleClassify::getAllParentClassify()->toArray();
		foreach($articleClassify as $key=>$value){
			$articleClassify[$key]['sub_classify']=ArticleClassify::getClassifyByPid($value['classify_id'])
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
