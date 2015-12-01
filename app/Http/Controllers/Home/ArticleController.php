<?php
namespace App\Http\Controllers\Home;

use App\Article;
use App\ArticleClassify;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Common\Controller;
class ArticleController extends Controller{
	private $urlArray;

	public function __construct(Request $request){
		$this->urlArray=explode('/',$request->url());
	}

	/**
	 * 显示文章封面
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index(){
		$mainClassify=ArticleClassify::getClassifyId($this->urlArray[count($this->urlArray)-2]);
		$subClassify=ArticleClassify::getClassifyId($this->urlArray[count($this->urlArray)-1]);
		$articleList=Article::whereArticleMainClassifyAndArticleSubClassify($mainClassify,$subClassify)->get();
		return view('home.article.index',compact('articleList'));
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

	 */
	public function show(){
		$article=Article::find($this->urlArray[count($this->urlArray)-1]);
		$article->article_view_count+=1;
		$article->save();
		return view('home.article.show',compact('article'));
	}

	/**
	 * 算法/JS/列表
	 * @return int
	 */
	public function arithmetic(){
		$argsArr=explode('/',\Request::path());
		$mainClassifyId=ArticleClassify::getClassifyId($argsArr[count($argsArr)-2]);
		$tag=$argsArr[count($argsArr)-1];
		$articleList=Article::where('article_tags','like',"%$tag%")
				->where('article_sub_classify','=',$mainClassifyId)->get();
		return view('home.article.list',compact('articleList'));
	}
}
