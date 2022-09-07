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
            $table->bigIncrements('id')->unsigned();
            $table->string('nome')->nullable();
            $table->integer('estatistica')->nullable();
            $table->year('ano');
            $table->string('ISBN');
            $table->string('editor');   

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('livros');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
