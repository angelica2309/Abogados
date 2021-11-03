<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*DB::table('users')->insert([
            [
                'name'=>'Maria Angélica Miranda Mendoza',
                'carnet'=>'12922186',
                'email'=>'angelica@gmail.com',
                'password'=>Hash::make('angelica0923'),
                'telefono'=>'71005231',
                'codabogado'=>'1111',
                'codcliente'=>null,
                'codprocurador'=>null,
                'estadocliente'=>null,
                'tipopersona'=>'Abogado'
            ],
            [
                'name'=>'Daniel Moreno Rojas',
                'carnet'=>'32548971',
                'email'=>'dani123@gmail.com',
                'password'=>Hash::make('dani123'),
                'telefono'=>'75064825',
                'codabogado'=>null,
                'codcliente'=>'1234',
                'codprocurador'=>null,
                'estadocliente'=>'Demandado',
                'tipopersona'=>'Cliente'
            ],
            
            [
                'name'=>'Gabriel Maddos Flynn',
                'carnet'=>'12922186',
                'email'=>'flynn@gmail.com',
                'password'=>Hash::make('flyn45'),
                'telefono'=>'71005231',
                'codabogado'=>null,
                'codcliente'=>null,
                'codprocurador'=>'1122',
                'estadocliente'=>null,
                'tipopersona'=>'Procurador'
            ]
        ]);*/
    }
}
