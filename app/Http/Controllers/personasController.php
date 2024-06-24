<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas =Persona::get();

        return view('personas', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //VALIDAR ERRORES
        $request->validate([
        'cPerApellido' => ['required', 'string', 'max:50'],
        'cPerNombre' => ['required', 'string', 'max:50'],
        'cPerDireccion' => ['required', 'string', 'max:100'],
        'dPerFecNac' => ['required', 'date'],
        'nPerEdad' => ['required', 'integer', 'min:0'],
        'nPerSueldo' => ['required', 'numeric', 'min:0', 'max:9999.99']
        ]);

        $personas =new Persona;
        $personas->cPerNombre = $request->input('cPerNombre');
        $personas->cPerApellido = $request->input('cPerApellido');
        $personas->cPerDireccion = $request->input('cPerDireccion');
        $personas->dPerFecNac = $request->input('dPerFecNac');
        $personas->nPerEdad = $request->input('nPerEdad');
        $personas->nPerSueldo = $request->input('nPerSueldo');
        $personas->nPerEstado = $request->input('nPerEstado');
        $personas->cPerRnd = $request->input('cPerRnd', ''); 
        $personas ->save();

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
        return view('posts.edit', ['persona'=>$persona]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //VALIDAR ERRORES
        $request->validate([
            'cPerApellido' => ['required', 'string', 'max:50'],
            'cPerNombre' => ['required', 'string', 'max:50'],
            'cPerDireccion' => ['required', 'string', 'max:100'],
            'dPerFecNac' => ['required', 'date'],
            'nPerEdad' => ['required', 'integer', 'min:0'],
            'nPerSueldo' => ['required', 'numeric', 'min:0', 'max:9999.99']
            ]);
    
            $persona->cPerNombre = $request->input('cPerNombre');
            $persona->cPerApellido = $request->input('cPerApellido');
            $persona->cPerDireccion = $request->input('cPerDireccion');
            $persona->dPerFecNac = $request->input('dPerFecNac');
            $persona->nPerEdad = $request->input('nPerEdad');
            $persona->nPerSueldo = $request->input('nPerSueldo');
            $persona->nPerEstado = $request->input('nPerEstado');
            $persona->cPerRnd = $request->input('cPerRnd', ''); 
            $persona ->save();
    
            return redirect()->route('personas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
