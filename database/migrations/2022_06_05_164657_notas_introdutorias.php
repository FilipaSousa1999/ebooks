<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected  $primaryKey ='idnotas_introdutorias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas_introdutorias', function (Blueprint $table) {
            $table->integer('idnotas_introdutorias')->unsigned();
            $table->integer('id_livro')->unsigned();
            $table->string('texto');
            $table->primary(['idnotas_introdutorias']);
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
