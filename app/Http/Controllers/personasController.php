<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePersonaRequest;
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
        return view('posts.create', ['persona'=> New Persona]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SavePersonaRequest $request)
    {
        
        Persona::create($request->validated());

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
    public function update(SavePersonaRequest $request, Persona $persona)
    {
           
            $persona->update($request->validated());
    
            return redirect()->route('personas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();

        return to_route('personas');
    }
}
