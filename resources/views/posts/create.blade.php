@extends('layout')

@section('title', 'Personas')

@section('content')
<section class="md:flex md:justify-center">

<div>
    <h1 class="font-bold">FORMULARIO - AGREGAR PERSONAS</h1>

    <form action="{{ route('posts.store') }}" method="POST" class="space-y-4 bg-purple-900 py-8 px-20 rounded-3xl">
        @csrf    

        {{-- NOMBRE - APELLIDO --}}
        <div class="md:flex md:space-x-4">
            <label class="block w-full">
                <span class="font-bold">Nombre</span>
                <input type="text" name="cPerNombre" id="" class="text-black w-full mt-1">
            </label>

            <label class="block w-full">
                <span class="font-bold">Apellido</span>
                <input type="text" name="cPerApellido" id="" class="text-black w-full mt-1">
            </label>
        </div>

        {{-- DIRECCION - FECHA DE NACIMIENTO --}}
        <div class="md:flex md:space-x-4">
            <label class="block w-full">
                <span class="font-bold">Direccion</span>
                <input type="text" name="cPerDireccion" id="" class="text-black w-full mt-1">
            </label>

            <label class="block w-full">
                <span class="font-bold">Fecha de Nacimiento</span>
                <input type="date" name="dPerFecNac" id="" class="text-black w-full mt-1">
            </label>
        </div>

        {{-- EDAD - SUELDO --}}
        <div class="md:flex md:space-x-4">
            <label class="block w-full">
                <span class="font-bold">Edad</span>
                <input type="number" name="nPerEdad" id="" class="text-black w-full mt-1" min="0" step="1">
            </label>

            <label class="block w-full">
                <span class="font-bold">Sueldo</span>
                <input type="number" name="nPerSueldo" id="" class="text-black w-full mt-1" min="0">
            </label>
        </div>

        {{-- ESTADO --}}
        <div class="md:flex md:space-x-4">
            <label class="block w-full">
                <span class="font-bold">Estado</span>
                <select name="nPerEstado" id="nPerEstado" class="text-black w-full mt-1">
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>
            </label>
        </div>

        <div>
        <a href="">
            <button type="submit" class="font-bold bg-blue-500 hover:bg-blue-700 rounded-full px-4 py-1 mt-4">Registrar</button>
            </a>
        </div>
          </form>
</div>
</section>

<a href="{{ route('personas') }}" class=" block mx-80 mt-5"><<-- Regresar</a>
@endsection
