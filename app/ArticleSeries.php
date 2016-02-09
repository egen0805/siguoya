<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Class ArticleSeries
 * @package App
 */
class ArticleSeries extends Model
{
	protected $primaryKey='series_id';

	protected $fillable=[
		'series_id',
		'series_name',
		'series_alias',
		'series_cover',
		'series_main_classify',
		'series_sub_classify',
		'series_cover'
	];

	/**
	 * 获取主分类和子分类下的专题
	 * @param $mainClassify
	 * @param $subClassify
	 * @return mixed
	 */
	public static function getSeriesByClassify($mainClassify,$subClassify){
		return ArticleSeries::where('series_main_classify','=',$mainClassify)->where('series_sub_classify','=',$subClassify)->get();
	}

	/**
	 * 解析系列封面的json数据
	 * @param $value
	 * @return mixed
	 */
	public function getSeriesCoverAttribute($value){
		return json_decode($value);
	}

	/**
	 * 获取主分类ID对应的名称
	 * @param $value
	 * @return mixed
	 */
	public function getSeriesMainClassifyAttribute($value){
		return ArticleClassify::getClassifyName($value);
	}

	/**
	 * 获取子分类ID对应的名称
	 * @param $value
	 * @return mixed
	 */
	public function getSeriesSubClassifyAttribute($value){
		return ArticleClassify::getClassifyName($value);
	}
}
