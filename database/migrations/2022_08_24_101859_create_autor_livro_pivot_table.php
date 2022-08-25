<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutorLivroPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_livro', function (Blueprint $table) {
            $table->unsignedBigInteger('autor_id')->index();
            $table->foreign('autor_id')->references('id')->on('autores');
            $table->unsignedBigInteger('livro_id')->index();
            $table->foreign('livro_id')->references('id')->on('livros')->onDelete('cascade');
            $table->primary(['autor_id', 'livro_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autor_livro');
    }
}
