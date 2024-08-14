<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePersonaRequest;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class personasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $estado = $request->get('estado', 'todos'); // Por defecto, "todos"

        // Filtrar personas según el estado proporcionado
        if ($estado == '0') {
            $personas = Persona::where('nPerEstado', '0')->get();
        } elseif ($estado == '1') {
            $personas = Persona::where('nPerEstado', '1')->get();
        } else {
            // Por defecto, mostrar todas las personas
            $personas = Persona::all();
        }

        return view('personas', compact('personas', 'estado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create', ['persona' => new Persona]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SavePersonaRequest $request)
    {
        // Validar los datos del formulario
        $data = $request->validated();

        // Manejar la subida de la imagen si existe
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        // Crear una nueva persona con los datos validados
        Persona::create($data);

        // Mensaje de éxito
        session()->flash('status', '¡Persona agregada correctamente!');

        return redirect()->route('personas');
    }

    /**
     * Display the specified resource.
     */
    public function show($persona)
    {
        return Persona::find($persona);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        return view('posts.edit', ['persona' => $persona]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SavePersonaRequest $request, Persona $persona)
    {
        // Validar los datos del formulario
        $data = $request->validated();

        // Manejar la subida de la nueva imagen si existe
        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($persona->image) {
                Storage::disk('public')->delete($persona->image);
            }

            // Guardar la nueva imagen
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        // Actualizar la persona con los datos validados
        $persona->update($data);

        return redirect()->route('personas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        // Eliminar la imagen de la persona si existe
        if ($persona->image) {
            Storage::disk('public')->delete($persona->image);
        }

        // Eliminar la persona de la base de datos
        $persona->delete();

        return to_route('personas');
    }
}
