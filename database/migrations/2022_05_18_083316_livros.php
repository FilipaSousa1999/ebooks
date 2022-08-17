<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected  $primaryKey ='id';
      /**
     * Run the migrations.
     * teste commit
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pdf')->unsigned()->nullable();
            $table->integer('id_autor')->unsigned()->nullable();
            $table->string('nome')->nullable();
            $table->integer('estatistica')->nullable();
            $table->year('ano');
            $table->string('ISBN');
            $table->string('editor');   
            $table->foreign('id_autor')->references('id')->on('autores');
            //$table->primary(['id']);
           // $table->foreign('id_pdf')->references('id')->on('pdf')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
};
