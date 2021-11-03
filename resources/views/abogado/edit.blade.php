@extends('layouts.app')

@section('title', 'Añadir Abogados')    
@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Editar Abogado</h1>  

    <form class="mt-4" method="POST"  action="{{ route('abogado.update', $user->id)}}" enctype="multipart/form-data">
        @csrf
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{$user->name}}" id="name" name="name" >

        @error('name')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
       @enderror


       <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
       text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{$user->email}}" id="email" name="email" >
       
       @error('email')
       <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
      @enderror
      
      <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
       text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{$user->telefono}}" id="telefono" name="telefono" >
       <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
       text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{$user->carnet}}" id="carnet" name="carnet" >
       <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
       text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" id="password" name="password" >

       @error('password')
       <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
      @enderror
        
       <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
       text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"  placeholder="Verificar contraseña" 
       id="password_confirmation" name="password_confirmation" >

       
       <button type="submit" class="rounded-md bg-gray-700 w-full text-lg text-white font-semibold p-2 my-3
       hover:bg-gray-900">Entrar</button>
    </form>
</div>
@endsection