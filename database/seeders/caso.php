<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class caso extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caso')->insert([
           'documento' => null,
           'descripcion' => 'Divorsio',
           'fechaini' => '2012/05/12',
           'fechafin' => null,
           'estado' => 'proceso',
           'idcliente' => '1',
           'idabogado' => '1',
           'idprocurador' => '1',
        ]);
    }
}
/*        $table->id();
            $table->string('documento')->nullable();
            $table->string('descripcion');
            $table->dateTime('fechaini');
            $table->dateTime('fechafin')->nullable();
            $table->string('estado');
            $table->unsignedBigInteger('idcliente');
            $table->foreign('idcliente')->on('users')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('idabogado');
            $table->foreign('idabogado')->on('users')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('idprocurador');
            $table->foreign('idprocurador')->on('users')->references('id')->onDelete('cascade');
            $table->timestamps();
        });*/
