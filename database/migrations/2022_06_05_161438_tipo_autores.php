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
        Schema::create('tipo_autores', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->unsignedBigInteger('idautores')->unsigned();
            $table->string('descricao');
            $table->primary(['id']);
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
