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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
