<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table)
        {
            $table->id();
            $table->timestamps();
            $table->string('titulo', 60);
            $table->text('descricao');
            $table->string('local');
            $table->boolean('privado');
            $table->string('imagem')->nullable();
            $table->json('itens');
            $table->dateTime('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
