<div>
    <label class="block w-full">
        <span class="font-bold text-white">Nombre</span>
        <input type="text" name="nombre" id="nombre" class="text-black w-full mt-1 p-2 rounded" value="{{old('nombre')}}">
        @error('nombre')
                    <br>
                    <small class="text-red-500">Complete el campo Nombre</small>
        @enderror
    </label>

    <label class="block w-full mt-4">
        <span class="font-bold text-white">Correo Electrónico</span>
        <input type="email" name="email" id="email" class="text-black w-full mt-1 p-2 rounded" value="{{old('email')}}">
        @error('email')
                    <br>
                    <small class="text-red-500">Complete el campo email</small>
        @enderror
    </label>

    <label class="block w-full mt-4">
        <span class="font-bold text-white">Asunto</span>
        <input type="text" name="asunto" id="asunto" class="text-black w-full mt-1 p-2 rounded" value="{{old('asunto')}}">
        @error('asunto')
                    <br>
                    <small class="text-red-500">Complete el campo Asunto</small>
        @enderror
    </label>

    <label class="block w-full mt-4">
        <span class="font-bold text-white">Mensaje</span>
        <textarea name="mensaje" id="mensaje" class="text-black w-full mt-1 p-2 rounded h-32">{{ old('mensaje') }}</textarea>
        @error('mensaje')
                    <br>
                    <small class="text-red-500">Complete el campo Mensaje</small>
        @enderror
    </label>
</div>
