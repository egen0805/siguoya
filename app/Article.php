<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Article extends Model{

	protected $primaryKey='article_id';

	protected $fillable=[
			'article_title',
			'article_main_classify',
			'article_sub_classify',
			'article_cover',
			'article_summary',
			'article_content',
			'article_tags',
			'article_keywords',
			'article_origin_url'
	];

	/**
	 * 获取最新和最热文章列表
	 * @param $type
	 * @param int $start
	 * @return mixed
	 */
	public static function getNewOrHotArticle($type,$start=0){
		if($type=='new'){
			return Article::orderBy('created_at','desc')->where('article_tags','=','')->skip($start)->take(10)->get();
		}else{
			return Article::orderBy('article_view_count','desc')->where('article_tags','=','')->skip($start)->take(10)->get();
		}
	}

	/**
	 * 根据主分类和子分类获取分类下面的文章
	 * @param $mainClassify
	 * @param $subClassify
	 * @return mixed
	 */
	public static function getArticleByClassify($mainClassify,$subClassify){
		return Article::whereArticleMainClassifyAndArticleSubClassify($mainClassify,$subClassify)
				->where('article_tags','=','')->get();
	}

	/**
	 * 获取相关文章
	 * @param $subClassify
	 * @param $articleId
	 * @return mixed
	 */
	public static function getReferArticleList($subClassify,$articleId){
		return Article::where('article_sub_classify','=',$subClassify)
				->where('article_id','!=',$articleId)
				->where('article_tags','=','')->get();
	}

	/**
	 * 获取系列文章
	 * @param string $articleTag
	 * @return mixed
	 */
	public static function getSeriesArticle($articleTag){
		return Article::where('article_tags','like',"%$articleTag%")->get();
	}
	
	/**文章封面数据格式化为json格式
	 * @param $value
	 * @return mixed
	 */
	public function getArticleCoverAttribute($value){
		return json_decode($value);
	}

	/**
	 * 获取文章主分类ID对应的分类名称
	 * @param $value
	 * @return mixed
	 */
	public function getArticleMainClassifyAttribute($value){
		return ArticleClassify::getClassifyAlias($value);
	}

	/**
	 * 获取文章子分类ID对应的分类名称
	 * @param $value
	 * @return mixed
	 */
	public function getArticleSubClassifyAttribute($value){
		return ArticleClassify::getClassifyAlias($value);
	}

	/**
	 * 将文章来源格式化为json格式
	 * @param $value
	 * @return mixed
	 */
	public function getArticleOriginUrlAttribute($value){
		return json_decode($value);
	}

	/**格式化文章发表日期
	 * @param $value
	 * @return string
	 */
	public function getCreatedAtAttribute($value){
		return substr($value,0,10);
	}
}
