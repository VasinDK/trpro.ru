<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   // таблица высказываний 
        // rema - высказывание
        // author - автор высказывания
        // images - фото автора 
        Schema::create('remark', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author');
            $table->text('rema'); 
            $table->string('images');
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
        Schema::drop('remark');
    }
}
