<?php

namespace App\Http\Controllers;

use App\Models\Procurador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcuradorController extends Controller
{
    //
    public function create(){
        return view('procurador.create');
    }

    public function index(){
        $procuradores = Procurador::all();
        return view('procurador.index', compact('procuradores'));
    }


    public function store(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'carnet' => 'required',
            'telefono' => 'required',
        ]);

       $user = Procurador::create(request(['name','email','password','carnet','telefono']));

       return view('home');
    }


    public function edit($id)
    {
        $procurador = Procurador::findOrFail($id);
        return view('procurador.edit', compact('procurador'));
    }


    public function update(Request $request, $id){
        $procurador = Procurador::findOrFail($id);
        $procurador->name = $request->get('name');
        $procurador->email = $request->get('email');
        $procurador->password = $request->get('password');
        $procurador->carnet = $request->get('carnet');
        $procurador->telefono = $request->get('telefono');
     
        $procurador->save();
 
        return redirect()->route('procurador.index', $procurador);
    }
}
