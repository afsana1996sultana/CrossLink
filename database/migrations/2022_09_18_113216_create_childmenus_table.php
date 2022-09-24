<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childmenus', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->string('menu_id');
            $table->string('submenu_id');
            $table->string('childmenu_name');
            $table->string('slug');
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
        Schema::dropIfExists('childmenus');
    }
}
