<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_series', function (Blueprint $table) {
            $table->increments('series_id');
            $table->string('series_name');
            $table->string('series_alias');
            $table->string('series_cover');
            $table->tinyInteger('series_main_classify');
            $table->tinyInteger('series_sub_classify');
            $table->tinyInteger('series_status');
            $table->tinyInteger('series_order');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article_series');
    }
}
