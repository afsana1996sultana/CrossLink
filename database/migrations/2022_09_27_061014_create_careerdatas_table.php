<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careerdatas', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->string('header1');
            $table->string('header2');
            $table->string('title1');
            $table->string('title2');
            $table->longText('long_description1');
            $table->string('long_description2');
            $table->string('img1');
            $table->string('img2');
            $table->string('w_p_name1');
            $table->string('w_p_name2');
            $table->string('w_p_name3');
            $table->string('w_p_icon1');
            $table->string('w_p_icon2');
            $table->string('w_p_icon3');
            $table->string('w_p_detail1');
            $table->string('w_p_detail2');
            $table->string('w_p_detail3');
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
        Schema::dropIfExists('careerdatas');
    }
}
