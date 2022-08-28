<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAliLivroPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ali_livro', function (Blueprint $table) {
            $table->unsignedBigInteger('ali_id')->index();
            $table->foreign('ali_id')->references('id')->on('ali');
            $table->unsignedBigInteger('livro_id')->index();
            $table->foreign('livro_id')->references('id')->on('livros')->onDelete('cascade');
            $table->primary(['ali_id', 'livro_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ali_livro');
    }
}
