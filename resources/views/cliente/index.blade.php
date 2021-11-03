@extends('layouts.app')

@section('title', 'Lista Clientes')    
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

  tr td:nth-child(n + 7),
  tr th:nth-child(n + 7) {
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
          <h2 class="text-2xl text-gray-500 font-bold" > LISTA DE CLIENTES</h2>
          <div class="text-center flex-auto">
          <a class="w-1/2 px-16 ml-auto flex justify-end pt-1" href="{{route('cliente.create')}}">    <button class="
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
           <table class="table text-gray-900 border-separate space-y-6 text-sm">
               <thead class="bg-gray-900 text-white">
                  <tr>
                     <th class="p-3">N°</th>
                     <th class="p-3 text-left">Nombre</th>
                     <th class="p-3 text-left ">Email</th>
                     <th class="p-3 text-left ">Carnet</th>
                     <th class="p-3 text-left ">Teléfono</th>
                     <th class="p-3 text-left ">Casos</th>
                     <th class="p-3 text-left ">Acciones</th>

                    </tr>

                </thead>
                <tbody>
                  @foreach ($clientes as $cliente)
                   
              
                    <tr class="bg-gray-200 lg:text-black">
                       <td class="p-3 font-medium capitalize ">{{($cliente->id == null)? "--": $cliente->id}}</td>
                       <td class="p-3 ">{{($cliente->name == null)? "--": $cliente->name}}</td>
                       <td class="p-3">{{($cliente->email == null)? "--": $cliente->email}}</td>
                       <td class="p-3 ">{{($cliente->carnet == null)? "--": $cliente->carnet}}</td>
                       <td class="p-3 uppercase ">{{($cliente->telefono == null)? "--": $cliente->telefono}}</td>
                       <td class="p-3">
                         <!--  <span class="bg-green-400 text-gray-50 rounded-md px-2">ACTIVE</span> -->
                     
                              <a href="{{route('caso.mycase', $cliente->id)}}" class="text-gray-500 hover:text-gray-100 mr-2">
                                  <i class="material-icons-outlined text-base">visibility</i>
                              </a>
                              <a href="{{route('caso.create', $cliente->id)}}" class="text-green-800 hover:text-gray-100 mx-3">
                                <i class="material-icons-outlined text-base">add_circle_outline</i>
                            </a>
                       </td>
                    <td class="p-3">
                           
                             <a href="{{route('cliente.edit', $cliente->id)}}" class="text-yellow-500 hover:text-gray-100 mx-3">
                              <i class="material-icons-outlined text-base">edit</i>
                          </a>
                        <!--<a href="#" class="text-red-400 hover:text-gray-100 mx-3" >
                            <i class="material-icons-round text-base">delete_outline</i>
                      </a> -->
                            
                           
                        </td>
                   </tr>
                  @endforeach
               </tbody>
           </table>
        </div>
    </div>
</div>
@endsection