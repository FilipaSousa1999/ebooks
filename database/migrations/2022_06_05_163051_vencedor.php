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
        Schema::create('vencedor', function (Blueprint $table) {
       
            $table->unsignedBigInteger('id')->unsigned();
            $table->string('texto');
            $table->primary(['id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vencedor');
    }
};
