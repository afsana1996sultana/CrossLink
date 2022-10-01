<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id')->primary;
            $table->string('p_name');
            $table->string('title');
            $table->string('slug');
            $table->string('category');
            $table->string('sub_category');
            $table->string('child_category')->nullable();
            $table->longText('long_description');
            $table->longText('short_desctiption');
            $table->string('p_img');
            $table->string('other_img1');
            $table->string('other_img2');
            $table->string('other_img3');
            $table->string('icon');
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
