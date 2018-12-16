<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('分公司名称');
            $table->string('image')->comment('展示图片');
            $table->string('address')->comment('地址');
            $table->string('phone')->comment('联系电话');
            $table->longText('content')->comment('图文介绍');
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
        Schema::dropIfExists('branch_infos');
    }
}
