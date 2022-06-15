<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected  $primaryKey ='idCapa';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capa', function (Blueprint $table) {
            $table->integer('idCapa')->unsigned();
            $table->integer('id_livro')->unsigned();
            $table->string('ficheiro_imagem');
            $table->primary(['idCapa']);
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
        Schema::dropIfExists('capa');
    }
};
