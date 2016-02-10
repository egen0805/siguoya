<?php
namespace App\Http\Controllers\Home;

use App\Article;
use App\ArticleClassify;
use App\ArticleSeries;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Common\Controller;
class ArticleController extends Controller{
	private $urlArray;

	public function __construct(Request $request){
		$this->urlArray=explode('/',$request->url());
	}

	/**
	 * 输出系列文章的列表
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index(){
		$mainClassify=ArticleClassify::getClassifyId($this->urlArray[count($this->urlArray)-2]);
		$subClassify=ArticleClassify::getClassifyId($this->urlArray[count($this->urlArray)-1]);
		//获取专题列表
		$seriesList=ArticleSeries::getSeriesByClassify($mainClassify,$subClassify);
		//获取文章列表
		$articleList=Article::getArticleByClassify($mainClassify,$subClassify);
		return view('home.article.index',compact('seriesList','articleList'));
	}

	/**
	 * 显示一个系列文章的封面
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function preview(){
		return view('home.article.preview');
	}

	/**
	 * 显示一个系列文章的列表
	 * 本来想命名为list的,结果跟我说list可能作为PHP7中的关键字
	 */
	public function articlelist(){
		return view('home.article.list');
	}

	/**
	 * 获取文章详情
	 * 并更新文章浏览次数
	 * 相关推荐
	 */
	public function show(){
		$articleId=$this->urlArray[count($this->urlArray)-1];
		$article=Article::find($articleId);
		$article->article_view_count+=1;
		$article->save();
		$classifyId=ArticleClassify::getClassifyId($article->article_sub_classify);
		$referArticleList=Article::getReferArticleList($classifyId,$article->article_id);
		return view('home.article.show',compact('article','referArticleList'));
	}

	/**
	 * 算法/JS/列表
	 * @return int
	 */
	public function arithmetic(){
		//http://www.firstdomain.name/home/arithmetic/javascript/datahandler/
		//$argsArr=[home,arithmetic,javascript,datahandler]
		//$tagOne=javascript
		//$tagOther=datahandler
		$argsArr=explode('/',\Request::path());
		$tagOne=$argsArr[count($argsArr)-1];
		$tagOther=$argsArr[count($argsArr)-2];
		$articleList=Article::where('article_tags','like',"%$tagOne%")
				->where('article_tags','like',"%$tagOther%")->get();
		return view('home.article.list',compact('articleList'));
	}

	public function phpstorm(){
		return view('home.article.phpstorm');
	}

	public function phpstormlist(){
		$articleList=Article::where('article_tags','like',"%phpstorm%")
				->get();
		return view('home.article.index',compact('articleList'));
	}

	public function jquerysource(){
		$articleList=Article::where('article_tags','like',"%jquerysource%")->orderBy('created_at','ASC')->get();
		return view('home.article.jquerysource',compact('articleList'));
	}
}
