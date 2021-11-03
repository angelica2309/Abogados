<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AbogadoController extends Controller
{
    public function create(){
        return view('abogado.create');
    }

    public function index(){
        $users = User::all();
        return view('abogado.index', compact('users'));
    }


    public function store(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'carnet' => 'required',
            'telefono' => 'required',
        ]);

       $user = User::create(request(['name','email','password','carnet','telefono']));
     
      
       return redirect()->route('abogado.index', $user);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('abogado.edit', compact('user'));
    }


    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->carnet = $request->get('carnet');
        $user->telefono = $request->get('telefono');
     
        $user->save();
 
        return redirect()->route('abogado.index', $user);
    }
}