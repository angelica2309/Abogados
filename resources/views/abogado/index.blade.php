@extends('layouts.app')

@section('title', 'Lista Abogados')    
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
          <h2 class="text-2xl text-gray-500 font-bold" > LISTA DE ABOGADOS</h2>
          <div class="text-center flex-auto">
          <a class="w-1/2 px-16 ml-auto flex justify-end pt-1" href="{{route('abogado.create')}}">    <button class="
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
                     <th class="p-3 text-left ">Acciones</th>
                    

                    </tr>

                </thead>
                <tbody>
                  @foreach ($users as $user)
                   
              
                    <tr class="bg-gray-200 lg:text-black">
                       <td class="p-3 font-medium capitalize ">{{($user->id == null)? "--": $user->id}}</td>
                       <td class="p-3 ">{{($user->name == null)? "--": $user->name}}</td>
                       <td class="p-3">{{($user->email == null)? "--": $user->email}}</td>
                       <td class="p-3 ">{{($user->carnet == null)? "--": $user->carnet}}</td>
                       <td class="p-3 uppercase ">{{($user->telefono == null)? "--": $user->telefono}}</td>
                       <td class="p-3">
                         <!--  <span class="bg-green-400 text-gray-50 rounded-md px-2">ACTIVE</span> -->
                     
                              <a href="{{route('caso.mycaseabogado', $user->id)}}"class="text-gray-500 hover:text-gray-100 mr-2">
                                  <i class="material-icons-outlined text-base">visibility</i>
                              </a>
                             <a href="{{route('abogado.edit', $user->id)}}" class="text-yellow-400 hover:text-gray-100 mx-2">
                                  <i class="material-icons-outlined text-base">edit</i>
                              </a>
                            
                        </td>
                   </tr>
                  @endforeach
               </tbody>
           </table>
        </div>
    </div>
</div>
@endsection