<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destino = Destino::orderBy('id', 'desc')->get();
        return view('destino.index', compact('destino'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destino.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $destino = new Destino();
        $destino->codigo = $request->codigo;
        $destino->nombre = $request->nombre;
        $destino->otros_datos = $request->otros_datos;
        
        $destino->save();
        return redirect()->route('destino.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destino $destino)
    {
        return view('destino.show',compact('destino'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destino $destino)
    {
        return view('destino.edit',compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destino $destino)
    {
        
        $destino->codigo = $request->codigo;
        $destino->nombre = $request->nombre;
        $destino->otros_datos = $request->otros_datos;
        
        $destino->save();
        return redirect()->route('destino.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destino $destino)
    {
        $destino->delete();
        return redirect()->route('destino.index');
    }
}
