<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('ad_id');
            $table->string('name',100)->nullable(false);
            $table->text('picTop');
            $table->integer('pkg_id')->index('pkgid');
            $table->text('pic');
            $table->string('urlTop', 200);
            $table->integer('picCoin')->default(0);
            $table->integer('urlCoin')->default(0);
            $table->string('url', 200);
            $table->dateTime('addtime');
            $table->tinyInteger('sort')->default(0);
            $table->integer('coin')->default(0);
            $table->tinyInteger('open')->default(0);
            $table->text('content');
            $table->tinyInteger('area')->default(0);
            $table->integer('cid')->index('cid');
            $table->tinyInteger('jump')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ads');
    }
}
