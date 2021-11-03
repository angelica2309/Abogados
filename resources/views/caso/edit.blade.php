@extends('layouts.app')

@section('title', 'Añadir Caso')    
@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Editar Caso</h1>  

    <form class="mt-4" method="POST" action="{{ route('caso.editar', $caso->id)}}" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="idcliente" id="idcliente" value="{{$caso->idcliente}}">
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{$caso->descripción}}" id="descripción" name="descripción" >

        @error('descripción')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
       @enderror


       <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
       text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{$caso->estadocaso}}" id="estadocaso" name="estadocaso" >
       
       @error('estadocaso')
       <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
      @enderror
      
    
     
      <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
      text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{$caso->estadocliente}}" id="estadocliente" name="estadocliente" >
      
      @error('estadocliente')
      <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
     @enderror
      <select id="idabogado"  name="idabogado" class="border border-gray-200 rounded-md bg-gray-200 w-full
      text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" >
        <option value="{{$caso->idabogado}}">Abogados</option>
        @foreach ($abogados as $abogado)
                            <option value="{{$abogado->id}}">
                                <spam>{{$abogado->name}}</spam>
                            </option>
                        @endforeach
      </select>
      <select id="idprocurador" name="idprocurador" class="border border-gray-200 rounded-md bg-gray-200 w-full
      text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" >
      <option value="{{$caso->idprocurador}}">Procurador</option>
      @foreach ($procuradores as $procurador)
                          <option value="{{$procurador->id}}">
                              <spam>{{$procurador->name}}</spam>
                          </option>
                      @endforeach
      </select>

       
      <button type="submit" class="rounded-md bg-gray-700 w-full text-lg text-white font-semibold p-2 my-3
      hover:bg-gray-900">Entrar</button>
    </form>
</div>
@endsection