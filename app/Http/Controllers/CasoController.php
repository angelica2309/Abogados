<?php

namespace App\Http\Controllers;

use App\Models\Caso;
use App\Models\Cliente;
use App\Models\Procurador;
use App\Models\User;
use Database\Seeders\users;
use Illuminate\Http\Request;
use Karriere\PdfMerge\PdfMerge;


class CasoController extends Controller

{
    public function create($id){
       $cliente = Cliente::findOrFail($id);
        $abogados = User::all();
        $procuradores = Procurador::all();
        return view('caso.create', ['cliente' => $cliente, 'abogados' => $abogados, 'procuradores' => $procuradores]);
    }

    public function index(){
        $casos = Caso::all();
        return view('caso.index', compact('casos'));
    }

    public function mycase($id){
        $casos = Caso::where('idcliente', $id)->get();
        return view('caso.index', compact('casos'));
    }
    public function mycaseprocurador($id){
        $casos = Caso::where('idprocurador', $id)->get();
        return view('caso.index', compact('casos'));
    }
    public function mycaseabogado($id){
        $casos = Caso::where('idabogado', $id)->get();
        return view('caso.index', compact('casos'));
    }

    public function store(){
        $credentials =   Request()->validate([ //validar los datos
            'descripción' => ['required'],
            'idcliente' => ['required'],
            'idabogado' => ['required'],
            'estadocaso' => ['required'],
            'estadocliente'=> ['required'],
        ]);

        Caso::create([
            'descripción'=>request('descripción'),
            'idcliente'=>request('idcliente'),
            'idabogado'=>request('idabogado'),
            'idprocurador'=>request('idprocurador'),
            'estadocaso'=> request('estadocaso'),
            'estadocliente'=> request('estadocliente'),
            'documento'=> null

        ]);
        return redirect()->route('caso.index');
    }

    public function show($id){
        $caso = Caso::findOrFail($id);
        return view('caso.show', compact('caso'));
    }

    public function update(Request $request, $id){
       $files = $request->file_pdf;
       $caso = Caso::findOrFail($id);
       $caso->documento = $this->unirDocumento($files, $caso);
       $caso->save();

       return redirect()->route('caso.show', $caso);
    }

    private function unirDocumento($files,Caso $caso){
       $pdf = new PdfMerge();

       foreach($files as $key => $file){
           $pdf->add($file->getPathName());
       }

       // verificamos si en el registro ya existe un documento 
       if(!is_null($caso->documento)){
           $pdf->add(public_path(). '/documentos/' .$caso->documento);
       }
       $nombre_pdf = $caso->cliente->name.'.pdf';
       $pdf->merge(public_path().'/documentos/'.$nombre_pdf);
       return $nombre_pdf;

    }

    public function estado(Request $request, $id){
        $caso = Caso::findOrFail($id);
        if($caso->estadocaso == 'Proceso'){
          $caso->estadocaso = 'Finalizado';
        }else{
            $caso->estadocaso = 'Proceso';  
        }

        $caso->save();
        return redirect()->route('caso.index');
    }

    public function edit($id)
    {
        $abogados = User::all();
        $procuradores = Procurador::all();
        $caso = Caso::findOrFail($id);
        return view('caso.edit', ['caso' => $caso, 'abogados' => $abogados, 'procuradores' => $procuradores]);
    }

    public function editar(Request $request, $id){
        $caso = Caso::findOrFail($id);

        $caso->descripción = $request->get('descripción');
        $caso->idcliente = $request->get('idcliente');
        $caso->idabogado = $request->get('idabogado');
        $caso->idprocurador = $request->get('idprocurador');
        $caso->estadocaso = $request->get('estadocaso');
        $caso->estadocliente = $request->get('estadocliente');
        $caso->documento = $request->get('documento');
        $caso->save();
 
        return redirect()->route('caso.index', $caso);
     }

    
}
