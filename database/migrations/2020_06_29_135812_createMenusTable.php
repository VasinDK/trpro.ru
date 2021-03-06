<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   // таблица меню
        // title - название
        // path - адрес ссылки
        // parent - родительское меню
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('path');
            $table->integer('parent');
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
        Schema::drop('menus');
    }
}
