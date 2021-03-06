<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('channel_id')->nullable()->unsigned()->default(null);
            $table->integer('category_id')->nullable()->unsigned()->default(null);
            $table->string('file');
            $table->enum('type', ['image', 'flash', 'video'])->nullable()->default('image');
            $table->integer('owner_id')->nullable()->unsigned()->default(null);
            $table->boolean('published')->nullable()->default(false);

            $table->boolean('positionTop')->nullable()->default(false);
            $table->boolean('positionCenter')->nullable()->default(false);
            $table->boolean('positionRight')->nullable()->default(false);
            $table->boolean('positionLeft')->nullable()->default(false);
            $table->boolean('positionBottom')->nullable()->default(false);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('channel_id')->references('id')->on('channels')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('owner_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('banners');
    }
}
