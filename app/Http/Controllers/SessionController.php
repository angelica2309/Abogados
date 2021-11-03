<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(){
        if(Auth::attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => 'El email o la contraseña son incorrectas',
            ]);
        }
        return view('home');
    }

    public function destroy(){
        Auth::logout();
        return redirect()->to('/');
    }
}
