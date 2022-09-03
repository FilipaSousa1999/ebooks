<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->foreign('premio_id')->references('id')->on('premios')->onDelete('cascade');
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
