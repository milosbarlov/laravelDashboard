<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images',function(Blueprint $table){
            $table->increments('id');
            $table->text('description');
            $table->integer('user_id')->unsigned();
            $table->integer('type');
        });

        Schema::create('products',function(Blueprint $table){
            $table->increments('id');
            $table->string('description');
            $table->integer('image_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

        });


        Schema::table('images', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('products', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Sheme::drop('product');
        Schema::drop('img');
    }
}
