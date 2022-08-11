<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected  $primaryKey ='idtipo_autores';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_autores', function (Blueprint $table) {
            $table->integer('idtipo_autores')->unsigned();
            $table->integer('idautores')->unsigned();
            $table->string('descricao');
            $table->primary(['idtipo_autores']);
            $table->foreign('idautores')->references('id')->on('autores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_autores');
    }
};
