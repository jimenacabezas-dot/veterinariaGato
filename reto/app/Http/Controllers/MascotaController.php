<?php

namespace App\Http\Controllers;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas = Mascota::all();
        return view('mascotas', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'edad' => 'required|integer',
            'sexo' => 'required',
            'dueno' => 'required',
            'telefono' => 'required',
            'stock' => 'required|integer|min:0',
        ], [
            'stock.required' => 'El stock es obligatorio.',
            'stock.integer' => 'El stock debe ser un número entero.',
            'stock.min' => 'El stock no puede ser negativo.',
        ]);

        Mascota::create([
            'nombre' => $request->nombre,
            'especie' => $request->especie,
            'raza' => $request->raza,
            'edad' => $request->edad,
            'sexo' => $request->sexo,
            'dueno' => $request->dueno,
            'telefono' => $request->telefono,
            'stock' => $request->stock,
        ]);

        return redirect()->route('mascotas');
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
        $mascota = Mascota::findOrFail($id);
        return view('mascotas.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'edad' => 'required|integer',
            'sexo' => 'required',
            'dueno' => 'required',
            'telefono' => 'required',
            'stock' => 'required|integer|min:0',
        ]);

        $mascota = Mascota::findOrFail($id);

        $mascota->update([
            'nombre' => $request->nombre,
            'especie' => $request->especie,
            'raza' => $request->raza,
            'edad' => $request->edad,
            'sexo' => $request->sexo,
            'dueno' => $request->dueno,
            'telefono' => $request->telefono,
        ]);

        return redirect()->route('mascotas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mascota = Mascota::findOrFail($id);
        $mascota->delete();
        return redirect()->route('mascotas');
    }
}
