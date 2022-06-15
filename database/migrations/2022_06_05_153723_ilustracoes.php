<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected  $primaryKey ='idilustracao';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ilustracoes', function (Blueprint $table) {
            $table->integer('idilustracao')->unsigned();
            $table->integer('id_livro')->unsigned();
            $table->string('ilustracao');
            $table->primary(['idilustracao']);
            $table->foreign('id_livro')->references('id')->on('livros');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ilustracoes');
    }
};
