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
			'article_origin_url',
	];

	public function getTenNewArticle(){
		return Article::take(10)->orderBy('created_at','desc')->get();
	}

	public function getTenHotArticle(){
		return Article::take(10)->orderBy('article_view_count','desc')->get();
	}

	public function getArticleCoverAttribute($value){
		return json_decode($value)->file_url;
	}

	public function getArticleMainClassifyAttribute($value){
		return ArticleClassify::getClassifyName($value);
	}

	public function getArticleSubClassifyAttribute($value){
		return ArticleClassify::getClassifyName($value);
	}

	public function getCreatedAtAttribute($value){
		return substr($value,0,10);
	}
}
