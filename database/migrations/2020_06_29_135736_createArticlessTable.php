<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   // таблица статей
        // alias - алиас
        // title - заголовок
        // text - основной текст
        // desc описание 
        // images - сопутствующее изображение
        
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alias');
            $table->string('title');
            $table->text('text');
            $table->text('desc');
            $table->text('images');
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
        Schema::drop('articles');
    }
}
