<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookIssuedDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_issued_details', function (Blueprint $table) {
            $table->id();
            $table->integer('id_libro')->unsigned()->nullable();
            $table->integer('id_user')->unsigned()->nullable();
            $table->date('dateOfIssue'); //Fecha emision
            $table->date('dateReturn'); //Fecha Retorno
            $table->boolean('status')->default(true);
            $table->integer('penaltyFee')->unsigned()->nullable();//Multa

            $table->foreign('id_libro')->references('id')->on('book');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('book_issued_details');
    }
}
