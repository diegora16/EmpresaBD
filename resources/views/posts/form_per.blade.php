{{-- NOMBRE - APELLIDO --}}
        <div class="md:flex md:space-x-4">
            <label class="block w-full">
                <span class="font-bold">Nombre</span>
                <input type="text" name="cPerNombre" id="" class="text-black w-full mt-1" value="{{old('cPerNombre', $persona->cPerNombre)}}">
                @error('cPerNombre')
                    <br>
                    <small class="text-red-500">Complete el campo Nombre</small>
                @enderror
            </label>

            <label class="block w-full">
                <span class="font-bold">Apellido</span>
                <input type="text" name="cPerApellido" id="" class="text-black w-full mt-1" value="{{old('cPerApellido', $persona->cPerApellido)}}">
                @error('cPerApellido')
                    <br>
                    <small class="text-red-500">Complete el campo Apellido</small>
                @enderror
            </label>
        </div>

        {{-- DIRECCION - FECHA DE NACIMIENTO --}}
        <div class="md:flex md:space-x-4">
            <label class="block w-full">
                <span class="font-bold">Direccion</span>
                <input type="text" name="cPerDireccion" id="" class="text-black w-full mt-1" value="{{old('cPerDireccion', $persona->cPerDireccion)}}">
                @error('cPerDireccion')
                    <br>
                    <small class="text-red-500">Complete el campo Direccion</small>
                @enderror
            </label>

            <label class="block w-full">
                <span class="font-bold">Fecha de Nacimiento</span>
                <input type="date" name="dPerFecNac" id="" class="text-black w-full mt-1" value="{{old('dPerFecNac', $persona->dPerFecNac)}}">
                @error('dPerFecNac')
                    <br>
                    <small class="text-red-500">Complete el campo Fecha de Nacimiento</small>
                @enderror
            </label>
        </div>

        {{-- EDAD - SUELDO --}}
        <div class="md:flex md:space-x-4">
            <label class="block w-full">
                <span class="font-bold">Edad</span>
                <input type="number" name="nPerEdad" id="" class="text-black w-full mt-1" min="0" step="1" value="{{old('cPerEdad', $persona->nPerEdad)}}">
                @error('nPerEdad')
                    <br>
                    <small class="text-red-500">Complete el campo Edad</small>
                @enderror
            </label>

            <label class="block w-full">
                <span class="font-bold">Sueldo</span>
                <input type="number" name="nPerSueldo" id="" class="text-black w-full mt-1" min="0" value="{{old('nPerSueldo', $persona->nPerSueldo)}}">
                @error('nPerSueldo')
                    <br>
                    <small class="text-red-500">Complete el campo Sueldo</small>
                @enderror
            </label>
        </div>

        {{-- ESTADO --}}
        <div class="md:flex md:space-x-4">
            <label class="block w-full">
                <span class="font-bold">Estado</span>
                <select name="nPerEstado" id="nPerEstado" class="text-black w-full mt-1">
                    <option value="" disabled {{ is_null($persona->nPerEstado) ? 'selected' : '' }}>Seleccione el estado</option>
                    <option value="1" {{ $persona->nPerEstado == 1 ? 'selected' : '' }}>1</option>
                    <option value="0" {{ $persona->nPerEstado == 0 ? 'selected' : '' }}>0</option>
                </select>

                @error('nPerEstado')
                    <br>
                    <small class="text-red-500">Complete el campo Estado</small>
                @enderror
            </label>
        </div>