<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>@yield('title') - Abogados</title>
      <!-- Tailwind CSS Link -->
      <link rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
      <!-- component -->
<link
href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
rel="stylesheet"
/>


</head>
<body class = "bg-gray-100 text-gray-800">

    <nav class="flex sticky top-0 items-center py-4 justify-between flex-wrap bg-gray-700 text-white" >
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2xl font-bold">Abogados</p>
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            @if (auth()->check())
           
            <li >
                <a href="{{route('login.destroy')}}" class="font-semibold hover:bg-gray-900 py-3 px-4 rounded-md ">Cerrar Sesión</a>
            </li>

            @else
                             
            <li >
                <a href="{{route('login.index')}}" class="font-semibold hover:bg-gray-900 py-3 px-4 rounded-md ">Login</a>
            </li>
            <li >  
                <a href="{{route('register.index')}}" class="font-semibold hover:bg-gray-900 py-3 px-4 rounded-md ">Register</a>
            </li>
           
            @endif

        </ul>
    </nav>
    @if (auth()->check())
    <div class="flex-col md:float-left md:flex md:flex-row md:min-h-screen md:h-auto ">
        
        <div @click.away="open = false" class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800" x-data="{ open: false }">
            <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
                <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><p class="text-sm font-sans"> <b>{{auth()->user()->name}}</b> </p></a>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
    <div >
        <nav :class="{'block': open, 'hidden': !open}" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
             @auth
              <ul>
         

                      <li>
                        <a class= "block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{route('abogado.index')}}">
                            <samp>Ver Abogados</samp>
                           
                       </a>
                      </li>
                      <li>
                        <a class= "block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{route('abogado.store')}}">
                           <i class="fa fa-eye" aria-hidden="true"></i> 
                           <samp>Añadir Abogado</samp>
                       </a>
                      </li>
                      <li>
                        <a class= "block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{route('cliente.index')}}">
                           <i class="fa fa-eye" aria-hidden="true"></i> 
                           <samp>Ver Clientes</samp>
                       </a>
                       <li>
                        <a class= "block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{route('cliente.create')}}">
                           <i class="fa fa-eye" aria-hidden="true"></i> 
                           <samp>Añadir Clientes</samp>
                       </a>
                      </li>
                    


                      <li>
                        <a class= "block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{route('procurador.index')}}">
                           <i class="fa fa-eye" aria-hidden="true"></i> 
                           <samp>Ver Procuradores</samp>
                       </a>
                      </li>

                      <li>
                        <a class= "block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{route('procurador.create')}}">
                           <i class="fa fa-eye" aria-hidden="true"></i> 
                           <samp>Añadir Procurador</samp>
                       </a>
                      </li>

                      
                      <li>
                        <a class= "block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{route('caso.index')}}">
                           <i class="fa fa-eye" aria-hidden="true"></i> 
                           <samp>Ver Casos</samp>
                       </a>
                      </li>

           
                  @endif
              </ul>

             @endauth            
        </nav>
    </div>
        </div>
    </div>

    </div>
    </div>
    @yield('content')
</body>
</html>