<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLivroPremioPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premio_livro', function (Blueprint $table) {
            $table->unsignedBigInteger('premio_id')->index();
            $table->foreign('premios_id')->references('id')->on('premios');
            $table->unsignedBigInteger('livro_id')->index();
            $table->foreign('livro_id')->references('id')->on('livros')->onDelete('cascade');
            $table->primary(['premio_id', 'livro_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('premio_livro');
    }
}
