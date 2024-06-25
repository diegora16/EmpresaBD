@extends('layout')

@section('title', 'Personas')

@section('content')
<section class="md:flex md:justify-center">

<div>
    <h1 class="font-bold">ACTUALIZAR DATOS DE PERSONAS</h1>

    <form action="{{ route('posts.update', $persona) }}" method="POST" class="space-y-4 bg-purple-900 py-8 px-20 rounded-3xl">
        @csrf    @method('PATCH')

        @include('posts.form_per')

        <div>
        <a href="">
            <button type="submit" class="font-bold bg-blue-500 hover:bg-blue-700 rounded-full px-4 py-1 mt-4">Actualizar</button>
            </a>
        </div>
          </form>
</div>
</section>

<a href="{{ route('personas') }}" class=" block mx-80 mt-5"><<-- Regresar</a>
@endsection
