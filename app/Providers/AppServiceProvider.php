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
		view()->share('page_title','写如诗的代码 - 思过崖');
		view()->share('page_keyword','思过崖,曾庆权,JavaScript算法大全,jQuery源码解读,Nginx深入研究,自学PHP编程,PHP深入研究,PHPStorm屠龙宝刀,Linux私房菜,程序猿,响应式网站开发');
		view()->share('page_desc','思过崖，原名曾庆权，毕业于广州大学心理学专业。放荡不羁爱编程，深信不想成为设计狮的文艺二B青年不是好程序猿，希望借助于技术博客和问答社区与各位朋友在编程上互相交流，共同进步！');
		//body名称,用于构建less的命名空间
		if(is_numeric(substr(\Request::path(),strlen(\Request::path())-1))){
			view()->share('page_name','home_article_show');
		}else{
			preg_match_all('/(\D+)/',\Request::path(),$capture);
			view()->share('page_name',str_replace('/','_',$capture[0][0]));
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
