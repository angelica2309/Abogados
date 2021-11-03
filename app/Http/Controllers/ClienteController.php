<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function create(){
        return view('cliente.create');
    }

    public function index(){
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }


    public function store(){
        $credentials =   Request()->validate([ //validar los datos
            'name' => ['required'],
            'email' => ['required'],
            'telefono' => ['required'],
            'carnet' => ['required'],
        ]);

        $cliente =Cliente::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'telefono'=>request('telefono'),
            'carnet'=> request('carnet')

        ]);
        return redirect()->route('caso.create', $cliente->id );
    }


    
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, $id){
        $cliente = Cliente::findOrFail($id);
        $cliente->name = $request->get('name');
        $cliente->email = $request->get('email');
        
        $cliente->carnet = $request->get('carnet');
        $cliente->telefono = $request->get('telefono');
     
        $cliente->save();
 
        return redirect()->route('cliente.index', $cliente);
    }
}
