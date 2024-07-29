@extends('layout')

@section('title', 'Personas')

@section('content')

<div class="status mb-5 mx-24 font-bold text-green-400 text-2xl">{{session('status')}}</div>

<section class="md:flex md:justify-around">



<div>
<h1 class="font-bold">PERSONAS DISPONIBLES</h2>




@foreach ($personas as $item )

    <div class="md: flex">
         <li class="mx-2">{{ $item->cPerNombre }} {{ $item->cPerApellido}}</li> 
         <a class="text-sky-300" href="{{route('posts.edit',$item)}}">Editar</a>
         <form action="{{ route('posts.destroy', $item) }}" method="POST" enctype="multipart/formdata">
            @csrf
            @method('DELETE')
            <button type="submit" class="mx-2 text-red-500">Eliminar</button>
         </form>
    </div>

    
    
@endforeach

</div>
    
<div>
<a href="{{ route('posts.create') }}">
<button class="font-bold bg-blue-500 hover:bg-blue-700 rounded-full px-4 py-1">Agregar Persona</button>
</a>


</div>

</section>
@endsection

