<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected  $primaryKey ='id';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas_introdutorias', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->unsignedBigInteger('id_livro')->unsigned();
            $table->string('texto');
            $table->primary(['id']);
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
        Schema::dropIfExists('notas_introdutorias');
    }
};
