@extends('layout')

@section('title', 'Login')

@section('content')

<section class="md:flex md:justify-center">

<form action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <h1 class="font-bold text-center text-white">Login</h1>

        <div>
            <label class="block w-full mt-4">
                <span class="font-bold text-white">Correo Electrónico</span>
                <input type="email" name="email" id="email" class="text-black w-full mt-1 p-2 rounded" value="{{ old('email') }}">
                @error('email')
                    <br>
                    <small class="text-red-500">Correo incorrecto</small>
                @enderror
            </label>

            <label class="block w-full mt-4">
                <span class="font-bold text-white">Contraseña</span>
                <input type="password" name="password" id="password" class="text-black w-full mt-1 p-2 rounded">
                @error('password')
                    <br>
                    <small class="text-red-500">Contraseña incorrecta</small>
                @enderror
            </label>

            <label class="block w-full mt-4">
                <input type="checkbox" name="remember" id="remember">
                <span class="font-bold text-white">Recuérdame</span>
            </label>
        </div>
    
        <div>
            <button type="submit" class="font-bold bg-blue-500 hover:bg-blue-700 rounded-full px-4 py-1 mt-6 text-white">Ingresar</button>
        </div>
    </div>    
</form>

</section>

@endsection
