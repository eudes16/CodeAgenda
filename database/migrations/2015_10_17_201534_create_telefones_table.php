<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descri��o', 50);
            $table->integer('codpa�s');
            $table->integer('ddd');
            $table->integer('prefixo');
            $table->integer('sufixo');

            $table->integer('pessoa_id', false, true);
            $table->foreign('pessoas_id')->references('id')->on('pessoas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('telefones');
    }
}
