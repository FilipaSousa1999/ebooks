<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApoioLivroPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoio_livro', function (Blueprint $table) {
            $table->unsignedBigInteger('apoio_id')->index();
            $table->foreign('apoio_id')->references('id')->on('apoios');
            $table->unsignedBigInteger('livro_id')->index();
            $table->foreign('livro_id')->references('id')->on('livros')->onDelete('cascade');
            $table->primary(['apoio_id', 'livro_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apoio_livro');
    }
}
