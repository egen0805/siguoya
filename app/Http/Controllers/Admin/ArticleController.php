<?php
namespace App\Http\Controllers\Admin;
use App\Article;
use App\ArticleClassify;
use App\Http\Requests;
use App\Http\Controllers\Common\Controller;
class ArticleController extends Controller{
	public function index(){
		$articleList=Article::all();
		return view('admin.article.index',compact('articleList'));
	}

	public function show(){

	}

	public function create(){
		$classifyList=ArticleClassify::getClassifyList(0);
		return view('admin.article.create',compact('classifyList'));
	}

	public function store(){
		echo Article::create(\Request::all());
	}

	public function edit($id){
		$article=Article::find($id);
		$classifyList=ArticleClassify::getClassifyList(0);
		return view('admin.article.edit',compact('article','classifyList'));
	}

	public function update(){
		$data=\Request::all();
		if(gettype(json_decode(\Request::input('article_cover')))=='NULL'){
			unset($data['article_cover']);
		}
		$article=Article::find(\Request::input('article_id'));
		echo $article->update($data);
	}

	public function destroy(){

	}

	public function ajaxClassifyList(){
		if(\Request::Ajax()){
			echo json_encode(ArticleClassify::getClassifyList(\Request::input('mainId')));
			exit();
		}
	}
}
