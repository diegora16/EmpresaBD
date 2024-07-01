@extends('layout')

@section('title', 'Contacto')

@section('content')
<section class="md:flex md:justify-center">

<div>
    <h1 class="font-bold">CONTACTANOS</h1>

    <form action="{{ route('contacto.store') }}" method="POST" class="space-y-4 bg-purple-900 py-8 px-20 rounded-3xl">
        @csrf    

       @include('posts.form_contac')
        <div>
        <a href="">
            <button type="submit" class="font-bold bg-blue-500 hover:bg-blue-700 rounded-full px-4 py-1 mt-4">Enviar</button>
            </a>
        </div>
          </form>
</div>
</section>


@endsection