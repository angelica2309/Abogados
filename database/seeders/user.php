<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
              'name' => 'Anyi Miranda',
              'email' => 'anyi@hotmail.com',
              'password' => 'Angie',
              'telefono' => '71005231',
              'carnet' => '12345678',
              'codabogado' => '1234',
              'codcliente' => null,
              'codprocurador' => null,
              'estadocliente' => null,
              'tipopersona' => 'Abogado'
              
        ]);
    }
}
/*'name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('telefono')->nullable();
            $table->string('carnet');
            $table->string('codabogado')->nullable();
            $table->string('codcliente')->nullable();
            $table->string('codprocurador')->nullable();
            $table->string('estadocliente')->nullable();
            $table->string('tipopersona'); */
