@extends('layout')

@section('title', 'Personas')

@section('content')
<section class="md:flex md:justify-around">

<div>
<h1 class="font-bold">PERSONAS DISPONIBLES</h2>

@foreach ($personas as $item )

    <div class="md: flex">
         <li class="mx-2">{{ $item->cPerNombre }} {{ $item->cPerApellido}}</li> <a class="text-sky-300" href="{{route('posts.edit',$item)}}">Editar</a>
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

