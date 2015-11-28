<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * By zqq 2015-11-25
 * 网站导航-文章分类数据表
 * Class CreateArticleClassify
 */

class CreateArticleClassifiesTable extends Migration{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(){
        Schema::create('article_classifies',function (Blueprint $table){
            /**
             * 分类ID
             * 分类名称
             * 分类别名
             * 分类父类ID
             * 分类排序
             * */
            $table->increments('classify_id');
            $table->string('classify_name');
            $table->string('classify_alias');
            $table->tinyInteger('classify_parent_id');
            $table->tinyInteger('classify_order');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down(){
        Schema::drop('article_classifies');
    }
}
