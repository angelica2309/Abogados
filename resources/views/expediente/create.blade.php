@extends('layouts.app')

@section('title', 'Añadir Imagen')    
@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-7/12 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">EXPEDIENTE JUDICIAL</h1>  

    <form class="mt-4" method="POST" action="{{ route('expediente.store')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="idcaso" id="idcaso" value="{{$caso->id}}">
           
     <input type="file" name="imagen" id="imagen" accept="image/*"  required multiple> 
      @error('file')
          <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</small>
      @enderror

     <div class="float-right">
        <button class="btn btn-primary">subir archivos</button>
     </div>

     
     <hr>  

  
    </form>
</div>
@endsection