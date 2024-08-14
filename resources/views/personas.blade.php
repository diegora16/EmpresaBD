@extends('layout')

@section('title', 'Personas')

@section('content')

<div class="status mb-5 mx-24 font-bold text-green-400 text-2xl">{{ session('status') }}</div>

<!-- Filtro de Estado -->
<div class="mb-6 flex justify-center">
    <form action="{{ route('personas') }}" method="GET">
        <label for="estado" class="mr-2 font-bold">Mostrar:</label>
        <select name="estado" id="estado" class="rounded-md p-2 text-black">
            <option value="todos" {{ $estado == 'todos' ? 'selected' : '' }}>Todos</option>
            <option value="1" {{ $estado == '1' ? 'selected' : '' }}>Activos</option>
            <option value="0" {{ $estado == '0' ? 'selected' : '' }}>Inactivos</option>
        </select>
        <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md">Filtrar</button>
    </form>
</div>

<section class="md:flex md:flex-wrap md:justify-center gap-8">

    <h1 class="font-bold text-2xl mb-4 mt-24">PERSONAS DISPONIBLES</h1>

    @foreach ($personas as $item)
    <div class="card bg-purple-900 text-white rounded-2xl shadow-md overflow-hidden w-60 p-4 text-b">
        <div class="card-image">
            @if($item->image)
            <img src="{{ asset('storage/' . $item->image) }}" alt="Imagen de {{ $item->cPerNombre }}" class="w-full h-40 object-cover rounded-t-2xl">
            @else
            <img src="default_image_path" alt="Sin imagen" class="w-full h-40 object-cover rounded-t-2xl">
            @endif
        </div>
        <div class="card-content mt-4">
            <h3 class="font-bold text-lg mb-2 text-center">{{ $item->cPerNombre }} {{ $item->cPerApellido }}</h3>
            <div class="flex justify-between mt-4">
                <a href="{{ route('posts.edit', $item) }}" class="text-blue-300 hover:underline">Editar</a>
                <form action="{{ route('posts.destroy', $item) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-300 hover:underline">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach

</section>

<div class="mt-8 flex justify-center">
    <a href="{{ route('posts.create') }}">
        <button class="font-bold bg-blue-500 hover:bg-blue-700 rounded-full px-4 py-1">Agregar Persona</button>
    </a>
</div>

@endsection
