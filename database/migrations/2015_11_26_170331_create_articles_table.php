<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateArticlesTable extends Migration{
	/**
	 * Run the migrations.
	 * 文章ID
	 * 文章标题
	 * 文章主类
	 * 文章子类
	 * 文章封面
	 * 文章摘要
	 * 文章内容
	 * 文章引用来源
	 * 文章阅览数量
	 * 文章排序
	 * @return void
	 */
	public function up(){
		Schema::create('articles',function (Blueprint $table){
			$table->increments('article_id');
			$table->string('article_title',20);
			$table->tinyInteger('article_main_classify',false,true);
			$table->tinyInteger('article_sub_classify',false,true);
			$table->string('article_cover');
			$table->string('article_summary');
			$table->text('article_content');
			$table->string('article_origin_url');
			$table->integer('article_view_count',false,true);
			$table->integer('article_order',false,true);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down(){
		Schema::drop('articles');
	}
}
