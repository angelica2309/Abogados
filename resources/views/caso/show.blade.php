@extends('layouts.app')

@section('title', 'Show')
@section('content')

  
<div class="block mx-auto my-12 p-8 bg-white w-7/12 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Expediente Judicial</h1>  

    <form class="mt-4" method="POST" action="{{ route('caso.update', $caso->id)}}" enctype="multipart/form-data">
        @csrf
        @if($caso->estadocaso == 'Proceso')
           
     <input type="file" name="file_pdf[]" accept="application/pdf"  required multiple> 
     <div class="float-right">
        <button class="btn btn-primary">subir archivos</button>
     </div>
        @endif
     
     <hr>  
     @if(!is_null($caso->documento))
     <iframe  src="{{'/documentos/'.$caso->documento}}" frameborder="0" width="100%" height="700px" ></iframe>
     @endif
    </form>
</div>
 
@endsection
