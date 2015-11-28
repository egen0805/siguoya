<?php
namespace App\Http\Controllers\Home;

use App\Article;
use App\ArticleClassify;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\common\Controller;
class IndexController extends Controller{
	/**
	 * Display a listing of the resource.
	 * @return \Illuminate\Http\Response
	 */
	public function index(){
		$articleClassifyModel=new ArticleClassify();
		$articleModel=new Article();
		//分类
		$articleClassify=$articleClassifyModel->getAllParentClassify()->toArray();
		foreach($articleClassify as $key=>$value){
			$articleClassify[$key]['sub_classify']=$articleClassifyModel->getClassifyByPid($value['classify_id'])
				->toArray();
		}
		//最新文章
		$articlesNew=$articleModel->getTenNewArticle();

		//最热文章
		$articlesHot=$articleModel->getTenHotArticle();

		return view('home.index.index',compact('articleClassify','articlesNew','articlesHot'));
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
