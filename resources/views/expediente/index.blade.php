
@extends('layouts.app')

@section('title', 'Expediente')    
@section('content')
<style>

    .table {
    border-spacing: 0 15px;
  }

  i {
    font-size: 1rem !important;
  }

  .table tr {
    border-radius: 20px;
  }

  tr td:nth-child(n + 6),
  tr th:nth-child(n + 6) {
    border-radius: 0 0.625rem 0.625rem 0;
  }

  tr td:nth-child(1),
  tr th:nth-child(1) {
    border-radius: 0.625rem 0 0 0.625rem;
  }

</style>

  
<!-- component -->
<link
  href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
  rel="stylesheet"
/>

<div class="flex items-center justify-center min-h-screen bg-white">
   <div class="col-span-12">
      <div class="overflow-auto lg:overflow-visible">
        <div class="flex lg:justify-between border-b-2 border-fuchsia-900 pb-1">
          <h2 class="text-2xl text-gray-500 font-bold" > EXPEDIENTE JUDICIAL</h2>
          <div class="text-center flex-auto">
          <a class="w-1/2 px-16 ml-auto flex justify-end pt-1" href="{{route('expediente.create', $caso->id)}}">    <button class="
          bg-gray-900
           hover:bg-gray-200
           text-white
           py-1
           px-3
           sm
           rounded-full
         ">+</button></a>
          </div>
         </div>
         <div class="container">
           
           
           
            <div class="card-columns">
                @foreach ($expedientes as $expediente)
               
                <img src="{{asset('/imagenes/'.$expediente->urlfoto)}}" alt=""  width="700px">
               <br>
        
                @endforeach
            </div>
          
        </div>   
        </div>
    </div>
</div>
@endsection