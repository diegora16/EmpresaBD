{{-- NOMBRE - APELLIDO --}}
<div class="md:flex md:space-x-4">
    <label class="block w-full">
        <span class="font-bold">Nombre</span>
        <input type="text" name="cPerNombre" class="text-black w-full mt-1" value="{{ old('cPerNombre', $persona->cPerNombre) }}">
        @error('cPerNombre')
            <br>
            <small class="text-red-500">Complete el campo Nombre</small>
        @enderror
    </label>

    <label class="block w-full">
        <span class="font-bold">Apellido</span>
        <input type="text" name="cPerApellido" class="text-black w-full mt-1" value="{{ old('cPerApellido', $persona->cPerApellido) }}">
        @error('cPerApellido')
            <br>
            <small class="text-red-500">Complete el campo Apellido</small>
        @enderror
    </label>
</div>

{{-- DIRECCION - FECHA DE NACIMIENTO --}}
<div class="md:flex md:space-x-4">
    <label class="block w-full">
        <span class="font-bold">Dirección</span>
        <input type="text" name="cPerDireccion" class="text-black w-full mt-1" value="{{ old('cPerDireccion', $persona->cPerDireccion) }}">
        @error('cPerDireccion')
            <br>
            <small class="text-red-500">Complete el campo Dirección</small>
        @enderror
    </label>

    <label class="block w-full">
        <span class="font-bold">Fecha de Nacimiento</span>
        <input type="date" name="dPerFecNac" class="text-black w-full mt-1" value="{{ old('dPerFecNac', $persona->dPerFecNac) }}">
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
        <input type="number" name="nPerEdad" class="text-black w-full mt-1" min="0" step="1" value="{{ old('nPerEdad', $persona->nPerEdad) }}">
        @error('nPerEdad')
            <br>
            <small class="text-red-500">Complete el campo Edad</small>
        @enderror
    </label>

    <label class="block w-full">
        <span class="font-bold">Sueldo</span>
        <input type="number" name="nPerSueldo" class="text-black w-full mt-1" min="0" value="{{ old('nPerSueldo', $persona->nPerSueldo) }}">
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

{{-- IMAGEN USUARIO --}}
<div class="md:flex items-center md:space-x-4">
    <span class="font-bold">Foto de perfil</span>
    <div class="mt-1">
        @if($persona->image)
            <div class="mb-2">
                <img id="preview-image" src="{{ asset('storage/' . $persona->image) }}" alt="Imagen de {{ $persona->cPerNombre }}" class="w-32 h-32 object-cover">
            </div>
        @else
            <img id="preview-image" src="" alt="Vista previa" class="w-32 h-32 object-cover" style="display:none;">
        @endif
        <label for="image" class="flex items-center">
            <input type="file" name="image" id="image-input" onchange="previewImage(event)">
        </label>
        @error('image')
            <br>
            <small class="text-red-500">Error al subir la imagen</small>
        @enderror
    </div>
</div>


<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function(){
            const output = document.getElementById('preview-image');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

