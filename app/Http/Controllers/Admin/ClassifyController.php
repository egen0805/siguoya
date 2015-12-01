<?php
namespace App\Http\Controllers\Admin;

use App\Article;
use App\ArticleClassify;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Common\Controller;
class ClassifyController extends Controller{


	/**
	 * 获取所有数组
	 * 显示为树状结构
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index(){
		$articleClassify=ArticleClassify::getAllClassify();
		$classifyTree=ClassifyController::recursion($articleClassify);
		return view('admin.classify.index',compact('classifyTree'));
	}

	public static function recursion($root){
		$tree=[];
		//关键,原始数组值中的主键=>原始数组中的值,构成临时映射
		$tmpMap=[];
		foreach($root as $value){
			$tmpMap[$value['classify_id']]=$value;
		}
		//巧妙的使用引用,遍历原始数组
		foreach($root as $value){
			if(!isset($tmpMap[$value['classify_parent_id']])){
				//意味着这是根节点
				$tree[]=&$tmpMap[$value['classify_id']];
			}else{
				//不是根节点
				$tmpMap[$value['classify_parent_id']]['sub_classify'][]=&$tmpMap[$value['classify_id']];
			}
		}
		unset($tmpMap);
		return $tree;
	}
}
