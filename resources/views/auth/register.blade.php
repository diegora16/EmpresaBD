@extends('layout')

@section('title', 'Register')

@section('content')

<section class="md:flex md:justify-center">

<form action="{{ route('register') }}" method="POST">
    @csrf
    <div>
        <h1 class="font-bold text-center text-white">Registro de Usuario</h1>

        <div>
            <label class="block w-full">
                <span class="font-bold text-white">Usuario</span>
                <input type="text" name="name" id="name" class="text-black w-full mt-1 p-2 rounded" value="{{ old('name') }}">
                @error('name')
                    <br>
                    <small class="text-red-500">Registre su nombre de Usuario</small>
                @enderror
            </label>

            <label class="block w-full mt-4">
                <span class="font-bold text-white">Correo Electrónico</span>
                <input type="email" name="email" id="email" class="text-black w-full mt-1 p-2 rounded" value="{{ old('email') }}">
                @error('email')
                    <br>
                    <small class="text-red-500">Registre su correo</small>
                @enderror
            </label>

            <label class="block w-full mt-4">
                <span class="font-bold text-white">Contraseña</span>
                <input type="password" name="password" id="password" class="text-black w-full mt-1 p-2 rounded">
                @error('password')
                    <br>
                    <small class="text-red-500">Registre una constraseña válida</small>
                @enderror
            </label>

            <label class="block w-full mt-4">
                <span class="font-bold text-white">Confirmar Contraseña</span>
                <input type="password" name="password_confirmation" id="password_confirmation" class="text-black w-full mt-1 p-2 rounded">
                @error('password_confirmation')
                    <br>
                    <small class="text-red-500">Confirmar su contraseña</small>
                @enderror
            </label>
        </div>
    
        <div>
            <button type="submit" class="font-bold bg-blue-500 hover:bg-blue-700 rounded-full px-4 py-1 mt-6 text-white">Registrar</button>
        </div>
    </div>    
</form>

</section>

@endsection
