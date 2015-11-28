<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateArticlesTable extends Migration{
	/**
	 * Run the migrations.
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
