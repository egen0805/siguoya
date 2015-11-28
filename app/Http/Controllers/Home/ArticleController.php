<?php

namespace App\Http\Controllers\Home;

use App\Article;
use App\ArticleClassify;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Common\Controller;

class ArticleController extends Controller
{
	private $urlArray;

	public function __construct(Request $request){
		$this->urlArray=explode('/',$request->url());
	}

	public function index(){
		$mainClassify=ArticleClassify::getClassifyId($this->urlArray[count($this->urlArray)-2]);
		$subClassify=ArticleClassify::getClassifyId($this->urlArray[count($this->urlArray)-1]);
		$articleList=Article::whereArticleMainClassifyAndArticleSubClassify($mainClassify,$subClassify)->get();
		return view('home.article.index',compact('articleList'));
	}

	/**
	 * 获取文章详情
	 * 并更新文章浏览次数
	 *
	 */
	public function show(){
		$article=Article::find($this->urlArray[count($this->urlArray)-1]);
		$article->article_view_count+=1;
		$article->save();
		return view('home.article.show',compact('article'));
    }
}
