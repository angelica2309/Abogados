@extends('layouts.app')

@section('title', 'Lista Casos')    
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

        tr td:nth-child(n + 9),
        tr th:nth-child(n + 9) {
        border-radius: 0 0.625rem 0.625rem 0;
        }

         tr td:nth-child(1),
         tr th:nth-child(1) {
          border-radius: 0.625rem 0 0 0.625rem;
        }

        :root {
   --bg-btn: #fed7d7;
   --btn-color: #e53e3e;
}

* {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
}

#checkbox:checked ~ .btn-change::before {
   transition: 0.3s;
   transform: translateX(23px);
}

.btn-change {
   background-color: var(--bg-btn);
}

.btn-change::before {
   content: '';
   display: block;
   width: 17px;
   height: 17px;
   border-radius: 50%;
   background-color: var(--btn-color);
   transition: 0.3s;
   transform: translateX(0);
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
         <h2 class="text-2xl text-gray-500 font-bold" > LISTA DE CASOS</h2>
        
     </div>
        </div>
           <table class="table text-gray-900 border-separate space-y-6 text-sm">
               <thead class="bg-gray-900 text-white">
                  <tr>
                     <th class="p-3">N°</th>
                     <th class="p-3 text-left">Cliente</th>
                     <th class="p-3 text-left ">Estado del Cliente</th>
                     <th class="p-3 text-left ">Descipción</th>
                     
                     <th class="p-3 text-left ">Abogado</th>
                     <th class="p-3 text-left ">Procurador</th>
                     <th class="p-3 text-left ">Estado del Caso</th>
                     <th class="p-3 text-left ">Expediente</th>
                    
                     <th class="p-3 text-left ">Acciones</th>
                    </tr>

                </thead>
                <tbody>
                  @foreach ($casos as $caso)
                   
              
                    <tr class="bg-gray-200 lg:text-black">
                       <td class="p-3 font-medium capitalize ">{{($caso->id == null)? "--": $caso->id}}</td>
                     <td class="p-3 ">{{($caso->idcliente == null)? "--": $caso->cliente->name}}</td>
                       <td class="p-3">{{($caso->estadocliente == null)? "--": $caso->estadocliente}}</td>
                       <td class="p-3 ">{{($caso->descripción == null)? "--": $caso->descripción}}</td>

                       <td class="p-3  ">{{($caso->idabogado == null)? "--": $caso->users->name}}</td>
                       <td class="p-3  ">{{($caso->idprocurador== null)? "--": $caso->procurador->name}}</td>
                       <td class="p-3 ">
                        @if ($caso->estadocaso == 'Proceso')
                        <a href="{{route('caso.estado', $caso->id)}}" class="text-yellow-800 hover:text-gray-100 mx-2">
                        <span class="bg-green-600 text-gray-50 rounded-md px-2" >ACTIVO</span>
                        </a>
                        @else
                        <a href="{{route('caso.estado', $caso->id)}}" class="text-yellow-800 hover:text-gray-100 mx-2">
                        <span class="bg-red-400 text-gray-50 rounded-md px-2">FINALIZADO</span> 
                        </a>
                        @endif
                        
                       </td>
                    
                       <td class="p-3">
                         <!--  <span class="bg-green-400 text-gray-50 rounded-md px-2">ACTIVE</span> -->
                     
                              <a href="{{route('expediente.index', $caso->id)}}" class="text-gray-500 hover:text-gray-100 mr-2">
                                  <i class="material-icons-outlined text-base">visibility</i>
                              </a>
                              @if ($caso->estadocaso == 'Proceso')
                              <a href="{{route('expediente.create', $caso->id)}}" class="text-green-800 hover:text-gray-100 mx-2">
                                 <i class="material-icons-outlined text-base">add_circle_outline</i>
                             </a>         
                              @endif

                           
                        </td>

                      </td>
                    
                      <td class="p-3">
                        <!--  <span class="bg-green-400 text-gray-50 rounded-md px-2">ACTIVE</span> -->
                  
                             </a>
                            <a href="{{route('caso.edit', $caso->id)}}" class="text-yellow-800 hover:text-gray-100 mx-2">
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