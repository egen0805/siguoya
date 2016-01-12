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

	public function getArticlesList($type,$start=0){
		if($type=='new'){
			return Article::orderBy('created_at','desc')->skip($start)->take(10)->get();
		}else{
			return Article::orderBy('article_view_count','desc')->skip($start)->take(10)->get();
		}
	}

	public function getArticleCoverAttribute($value){
		return json_decode($value);
	}

	public function getArticleMainClassifyAttribute($value){
		return ArticleClassify::getClassifyName($value);
	}

	public function getArticleSubClassifyAttribute($value){
		return ArticleClassify::getClassifyName($value);
	}

	public function getArticleOriginUrlAttribute($value){
		return json_decode($value);
	}


	public function getCreatedAtAttribute($value){
		return substr($value,0,10);
	}
}
