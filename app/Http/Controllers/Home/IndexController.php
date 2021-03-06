<?php
namespace App\Http\Controllers\Home;

use App\Article;
use App\ArticleClassify;
use App\ArticleSeries;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\common\Controller;
/**
 * Class IndexController
 * @package App\Http\Controllers\Home
 */
class IndexController extends Controller{

	/**
	 *  在控制器里面指定中间件
	 *  IndexController constructor.
		public function __construct(){
			$this->middleware('auth');
		}
	*/

	/**默认的控制器的默认方法
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index(){
		//导航列表
		$articleClassifyModel=new ArticleClassify();
		$articleClassify=ArticleClassify::getAllParentClassify()->toArray();
		foreach($articleClassify as $key=>$value){
			$articleClassify[$key]['sub_classify']=$articleClassifyModel->getClassifyByPid($value['classify_id'])
				->toArray();
		}
		//系列文章
		$seriesArticle=ArticleSeries::getAllSeries();
		//最新文章与最热文章
		$articlesNew=Article::getNewOrHotArticle('new');
		$articlesHot=Article::getNewOrHotArticle('hot');
		return view('home.index.index',compact('articleClassify','articlesNew','articlesHot','seriesArticle'));
	}

	/**
	 * Ajax请求,刷新获取文章列表,每次多增加5条
	 */
	public function ajaxarticlelist(){
		//从第几条开始以及排序问题
		$articleModel=new Article();
		$data=\Request::all();
		$start=$data['start'];
		$type=$data['type'];
		if($type=='new'){
			$articlesNew=Article::getNewOrHotArticle($type,$start);
			return view('home.index.tplnew',compact('articlesNew'));
		}else{
			$articlesHot=Article::getNewOrHotArticle($type,$start);
			return view('home.index.tplhot',compact('articlesHot'));
		}

	}

	/**
	 * Show the form for creating a new resource.
	 * @return \Illuminate\Http\Response
	 */
	public function create(){
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request){
		//
	}

	/**
	 * Display the specified resource.
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id){
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id){
		//
	}

	/**
	 * Update the specified resource in storage.
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request,$id){
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id){
		//
	}
}
