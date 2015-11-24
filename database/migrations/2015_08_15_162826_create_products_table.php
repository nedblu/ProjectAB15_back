<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->integer('description_id');
            $table->integer('category_id');
            $table->integer('parent_id')->unsigned();
            $table->string('sku');
            $table->integer('offer_id')->unsigned();
            $table->boolean('stock');
            $table->boolean('colors');
            $table->boolean('ink');
            $table->boolean('equipment');
            $table->text('description')->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
