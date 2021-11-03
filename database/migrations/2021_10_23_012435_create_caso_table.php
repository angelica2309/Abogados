<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caso', function (Blueprint $table) {
            $table->id();
            $table->string('descripción');
            $table->unsignedBigInteger('idcliente')->nullable();
            $table->foreign('idcliente')->on('cliente')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('idabogado')->nullable();
            $table->foreign('idabogado')->on('users')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('idprocurador')->nullable();
            $table->foreign('idprocurador')->on('procurador')->references('id')->onDelete('cascade');
            $table->string('estadocaso');
            $table->string('estadocliente');  
            $table->string('documento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caso');
    }
}
