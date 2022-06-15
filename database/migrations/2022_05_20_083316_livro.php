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
            $table->integer('id')->unsigned();
            $table->integer('id_pdf')->unsigned();
            $table->string('nome')->nullable();
            $table->integer('estatistica')->nullable();
            $table->year('ano');
            $table->string('ISBN');
            $table->string('editor');   
            $table->primary(['id']);
           // $table->foreign('id_pdf')->references('id')->on('pdf');
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
