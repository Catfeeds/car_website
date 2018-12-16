<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('branch_id')->comment('商品所属分公司');
            $table->foreign('branch_id')->references('id')->on('branch_infos')->onDelete('cascade');
            $table->string('name')->comment('商品名称');
            $table->string('image')->comment('封面图片');
            $table->text('banner')->comment('介绍轮播图');
            $table->string('price')->comment('价格');
            $table->longText('content')->comment('图文详情');
            $table->unsignedTinyInteger('sort')->default(50)->comment('排序');
            $table->boolean('is_show')->default(0)->comment('是否展示');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
