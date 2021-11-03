<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    //
    public function create(){
        return view('auth.register');
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
      Auth::login($user);
      
       return view('home');
    }
}
