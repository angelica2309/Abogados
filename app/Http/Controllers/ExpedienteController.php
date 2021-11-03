<?php

namespace App\Http\Controllers;

use App\Models\Caso;
use App\Models\Expediente;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ExpedienteController extends Controller
{
    public function create($id){
        $caso = Caso::findOrFail($id);
  
        return view('expediente.create', compact('caso'));
    }

    public function index($id){
        $expedientes = Expediente::where('idcaso',$id)->get();
        $caso = Caso::findOrFail($id);
        return view('expediente.index', compact('expedientes'), compact('caso'));
    }


    public function store( Request $request){
       $request->validate([
           'imagen' => 'image|max:2048',
           'idcaso' => 'required',
       ]);


          $imagen = $request->file('imagen');
         
            $nombre = time(). '_' . $imagen->getClientOriginalName();
            $destino = public_path().'/imagenes';
            $imagen->move($destino, $nombre);
            
             $expediente = Expediente::create([
                'idcaso'=>request('idcaso'),
            ]);
            $expediente->urlfoto = $nombre;
            $expediente->save();
            return redirect()->route('expediente.index' , $expediente->idcaso);
        
    }

    public function imprimir($id){
        $expedientes = Expediente::where('idcaso',$id)->get();
    
    
        $pdf = PDF::loadView('expediente.index', compact('expedientes'), compact('caso'));
        return $pdf->stream('prueba.pdf');
    }

}