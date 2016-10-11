<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaCardapios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardapios', function (Blueprint $table) {
            $dias = ['segunda','terça', 'quarta', 'quinta','sexta'];

            $table->increments('id');
            $table->enum('dia', $dias);

            $table->unsignedInteger('item_id');
            $table->foreign('item_id')->references('id')->on('itens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardapios');
    }
}
