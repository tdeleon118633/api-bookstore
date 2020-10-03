<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('name_book',200);//author
            $table->integer('quantity')->unsigned()->nullable();
            $table->integer('author_id')->unsigned()->nullable();
            $table->timestamps();
            $table->integer('number')->unsigned()->nullable();
            $table->integer('book_price')->unsigned()->nullable();
            $table->date('birth_date');
            $table->foreign('author_id')->references('id')->on('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
