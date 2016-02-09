<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * By zqq 2015-11-25
 * 文章分类Eloquent模型
 * Class ArticleClassify
 * @package App
 */
class ArticleClassify extends Model{

	protected $primaryKey='classify_id';


	public static function getAllClassify(){
		return ArticleClassify::orderBy('classify_order','ASC')->get()->toArray();
	}


	/**
	 * 获取所有的父类
	 * @return mixed
	 */
	public static function getAllParentClassify(){
		return ArticleClassify::where('classify_parent_id','=',0)
				->orderBy('classify_order','asc')
				->get();
	}

	/**
	 * 根据父类ID获取子类
	 * @param $parent_id
	 * @return mixed
	 */
	public static function getClassifyByPid($parent_id){
		return ArticleClassify::where('classify_parent_id','=',$parent_id)
				->orderBy('classify_order','asc')
				->get();
	}

	/**
	 * 获取分类ID与分类名称的键值对
	 * @param $pid 父分类ID
	 * @return mixed
	 */
	public static function getClassifyList($pid){
		$classifyList=ArticleClassify::where('classify_parent_id','=',$pid)->lists('classify_name','classify_id')
				->toArray();
		return $classifyList;
	}

	/**
	 * 根据ID获取分类名称
	 * @param $classify_id
	 * @return mixed
	 */
	public static function getClassifyName($classify_id){
		$objArray=ArticleClassify::take(1)->select('classify_alias')->where('classify_id','=',$classify_id)->get();
		return $objArray[0]['classify_alias'];
	}

	/**
	 * 根据分类名称获取ID
	 * @param $classify_name
	 * @return mixed
	 */
	public static function getClassifyId($classify_name){
		$objArray=ArticleClassify::take(1)->select('classify_id')
				->where('classify_alias','=',$classify_name)->get();
		return $objArray[0]['classify_id'];
	}

}
